<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Cadastros Controller
 *
 * @property \App\Model\Table\CadastrosTable $Cadastros
 *
 * @method \App\Model\Entity\Cadastro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CadastrosController extends AppController {

    public function beforeFilter(\Cake\Event\Event $event) {
        //obtenho a sessão atual, e busco o id de regras salvo na tabela User
        $session = $this->request->getSession();
        if ($session->check('User')) {
            $permissao = $session->read('User');
        } else if ($session->check('Registro')) {
            $permissao = $session->read('Registro');
        } else {
            $permissao['User.roles_id'] = 0;
        }

        //Classifico o nivel de acesso conforme o id presente na tabela Roles onde [1 = Administrador, 2= Super usuário, 3 = Aluno, 4 = público
        switch ($permissao['User.roles_id']) {
            case null:
                $this->Auth->allow(['controller' => 'Registros', 'action' => 'registro']);
                break;
            case 0:
                $this->Auth->allow(['cadastro', 'associarDados', 'edit']);
                break;
            case 1:
                $this->Auth->allow(['cadastro', 'index', 'add', 'edit', 'delete']);
                break;
            case 2:
                $this->Auth->allow(['cadastro', 'index', 'add']);
                break;
            case 3:
                $this->Auth->allow('meucadastro');
                break;
            case 4:
                $this->Auth->allow(['cadastro', 'associarDados', 'edit']);
                break;
        }
    }

    public function cadastro($id = null) {

        $cadastro = $this->Cadastros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            //Permiti editar os dados no objeto entity $cadastro
            $cadastro = $this->Cadastros->patchEntity($cadastro, $this->request->getData());

            if ($this->Cadastros->save($cadastro)) {
                $this->Flash->success(__('O Cadastro foi Salvo'));

                //registrar o objeto entity $cadastro como novo usuário
                $newUser = $this->perfi($cadastro);
                if ($newUser === true) {

                    $session = $this->request->getSession();
                    //Cria o novo usuario destrói session e redireciona para o LOGIN
                    $session->delete('Registro');
                    $session->delete('Validar');
                    $session->destroy();
                    $this->Flash->success(__('Novo Perfil criado com sucesso'));
                    $this->redirect(['controller' => 'Users', 'action' => 'login']);
                } else {
                    $this->Flash->error(__('Ocorreu alguma coisa errada. Desculpa, vamos tentar novamente?'));
                    $this->redirect(['controller' => 'Registros', 'action' => 'registro']);
                }
            } else {
                debug($cadastro);

                exit;
                $this->Flash->error(__('Ocorreu alguma coisa errada no seu cadastro. Desculpa, vamos tentar novamente?'));
                $this->redirect(['controller' => 'Registros', 'action' => 'registro']);
            }
        }
        $this->set(compact('cadastro'));
        $this->render('cadastro', 'initial');
    }

    /*
      private function getId($condicao, $entidade){
      $query = $entidade->find('all', [
      'conditions' = >
      'limit' => 10
      ]);
      } */

    public function associarDados() {
        $session = $this->request->getSession();

        if ($session->check('Registro') && $session->check('Validar')) {

            //envia o array 'Validar' da $session
            $registro = $session->read('Registro');
            $validar = $session->read('Validar');

            $cadastro = $this->Cadastros->newEntity();

            $cadastro->username = $registro['User.username'];
            $cadastro->email = $registro['User.email'];
            $cadastro->lembrar = $registro['User.remember_token'];
            $cadastro->password = $registro['User.senha'];
            $cadastro->first_name = $validar['User.first_name'];
            $cadastro->last_name = $validar['User.last_name'];
            $cadastro->nome = $validar['User.perfi.nome'];
            $cadastro->rg = $registro['User.perfi.rg'];
            $cadastro->cpf = $validar['User.perfi.cpf'];
            $cadastro->cep = $validar['User.perfi.cep'];
            $cadastro->registrosid = $registro['User.id'];
            $cadastro->codigoid = 1028;
            $cadastro->perfisid = '';
            $cadastro->contatosid = '';
            $cadastro->ddd = $validar['User.contato.ddd'];
            $cadastro->numero = $validar['User.contato.num'];
            $cadastro->rolesid = $registro['User.roles_id'];
        } else {
            $this->Flash->error(__('Ocorreu alguma coisa errada no seu cadastro. Desculpa, vamos tentar novamente?'));
            $this->redirect(['controller' => 'Registros', 'action' => 'registro']);
        }

        if ($this->Cadastros->save($cadastro)) {

            //realizo a busca utilizando os dados de Username Or Email da session, do cadastro que acabou de ser salvo
            $query = $this->Cadastros->findAllByUsernameOrEmail($registro['User.username'], $registro['User.email']);
            $thisId = $query->first();

            //Executo o método cadastro, onde este é responsavel por cadastrar todos os outros métodos do usuário
            //if($this->edit($thisId['id'])){
            //$this->Flash->success(__('Novo Perfil criado com sucesso'));
            //$this->redirect(['controller'=>'Users', 'action' => 'login']);
            $this->redirect(['controller' => 'Cadastros', 'action' => 'cadastro', $thisId->id]);
            //}
        } else {
            $this->Flash->error(__('Ocorreu alguma coisa errada na hora de salvar seu cadastro. Desculpa, vamos tentar novamente?'));
            $this->redirect(['controller' => 'Registros', 'action' => 'registro']);
        }
    }

    private function perfi($dados) {
        $session = $this->request->getSession();
        $getS = $session->read('Validar');
        $perfis = $this->loadModel('Perfis');
        $perfi = $perfis->newEntity();

        //Se usuário for do tipo '4 => Online' significa que o usuario não consta no server da educafro via requisição JSON
        //Utilizo o array $getS e o objeto $dados do cadastro, para registrar a entity do perfil
        if ($getS['User.type'] == 4) {
            $perfi->nome = $dados->first_name . ' ' . $dados->last_name;
            $perfi->img = '';
            $perfi->rg = $dados->rg;
            $perfi->cpf = $dados->cpf;
            $perfi->cep = '';
            $perfi->endereco = '';
            $perfi->bairro = '';
            $perfi->cidade = '';
            $perfi->estado = '';
        } else {
            $perfi->nome = $dados->nome;
            $perfi->img = '';
            $perfi->rg = $dados->rg;
            $perfi->cpf = $dados->cpf;
            $perfi->cep = $dados->cep;
            $perfi->endereco = $this->consultarEndereco($dados->cep);
            $perfi->bairro = $this->consultarBairro($dados->cep);
            $perfi->cidade = $this->consultarCidade($dados->cep);
            $perfi->estado = $this->consultarEstado($dados->cep);
        }
        //altero os dados da entidade
        //$perfi = $this->Cadastros->patchEntity($perfi, $this->request->getData());
        //Cadastrar os dados nas tabelas Contatos e Users apartir do perfi_id enviado como parametro
        if ($perfis->save($perfi)) {
            $query = $perfis->findAllByCpf($dados->cpf);
            $thisId = $query->first();

            //Se contato() retornar verdadeiro ele valida para o método cadastro
            if ($this->contato($dados, $thisId->id)) {
                $this->Flash->success(__('Novo Perfil criado com sucesso'));

                return true;
            } else {
                $this->Flash->error(__('Erro em cadastrar perfil'));
                return false;
            }
        }
    }

    private function contato($dados, $perfi_id) {
        $session = $this->request->getSession();
        $getS = $session->read('Validar');
        $contatos = $this->loadModel('Contatos');
        $contato = $contatos->newEntity();
        
        //Se usuário for do tipo '4 => Online' significa que o usuario não consta no server da educafro via requisição JSON
        //Utilizo o array $getS e o objeto $dados do cadastro, para registrar a entity do contato
        if ($getS['User.type'] == 4) {
            $contato->ddd = $dados->ddd;
            $contato->numero = $dados->numero;
            $contato->aparelho = 'Principal';
            $contato->type = 1;
            $contato->perfis_id = $perfi_id;
        } else { /** Salvar o contato que vem do server como fixo e salvar o dado que vem do cadastro como principal */ 
            $contato->ddd = $getS['User.contato.ddd'];
            $contato->numero = $getS['User.contato.num'];
            $contato->aparelho = 'Principal';
            $contato->type = 1;
            $contato->perfis_id = $perfi_id;
        }
        //Se aceito ele valida para o método perfi
        if ($contatos->save($contato)) {

            if ($this->user($dados, $perfi_id)) {
                $this->Flash->success(__('Novo Contato criado com sucesso'));
                return true;
            } else {
                $this->Flash->error(__('Erro em cadastrar contato'));
                return false;
            }
        }
    }

    private function user($dados, $perfi_id) {
        $session = $this->request->getSession();
        $getS = $session->read('Validar');
        $users = $this->loadModel('Users');
        $user = $this->Users->newEntity();

        //Utilizando o array $getS e o objeto $dados do cadastro, para registrar a entity do users
        $user->username = $dados->username;
        $user->email = $dados->email;
        $user->password = $dados->password;
        $user->remember_token = $dados->lembrar;
        $user->google = '';
        $user->created = '';
        $user->modified = '';
        $user->oauth_provider = '';
        $user->oauth_uid = '';

        //Se usuário for do tipo '4 => Online' significa que o usuario não consta no server da educafro via requisição JSON
        //Atribuo o nome que ele digitou como o verdadeiro nome dele
        if ($getS['User.type'] == 4) {
            $user->first_name = $dados->first_name;
            $user->last_name = $dados->last_name;
        } else {
            $user->first_name = $getS['User.first_name'];
            $user->last_name = $getS['User.last_name'];
        }
        $user->gender = '';
        $user->locale = '';
        $user->cover = '';
        $user->picture = '';
        $user->link = '';
        $user->type = $getS['User.type'];
        $user->perfis_id = $perfi_id;
        $user->codigos_id = 1028;
        $user->roles_id = 3;

        //Se aceito ele valida para o método contato
        if ($this->Users->save($user)) {
            $this->Flash->success(__('Novo Usuario criado com sucesso'));
            return true;
        } else {
            $this->Flash->error(__('Erro em cadastrar usuário'));
            return false;
        }
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $cadastros = $this->paginate($this->Cadastros);

        $this->set(compact('cadastros'));
    }

    /**
     * View method
     *
     * @param string|null $id Cadastro id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $cadastro = $this->Cadastros->get($id, [
            'contain' => []
        ]);

        $this->set('cadastro', $cadastro);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $cadastro = $this->Cadastros->newEntity();
        if ($this->request->is('post')) {
            $cadastro = $this->Cadastros->patchEntity($cadastro, $this->request->getData());
            if ($this->Cadastros->save($cadastro)) {
                $this->Flash->success(__('The cadastro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cadastro could not be saved. Please, try again.'));
        }
        $this->set(compact('cadastro'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cadastro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $cadastro = $this->Cadastros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cadastro = $this->Cadastros->patchEntity($cadastro, $this->request->getData());
            if ($this->Cadastros->save($cadastro)) {
                $this->Flash->success(__('The cadastro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cadastro could not be saved. Please, try again.'));
        }
        $this->set(compact('cadastro'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cadastro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $cadastro = $this->Cadastros->get($id);
        if ($this->Cadastros->delete($cadastro)) {
            $this->Flash->success(__('The cadastro has been deleted.'));
        } else {
            $this->Flash->error(__('The cadastro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    private function CEP($consultar) {
        $url = 'https://viacep.com.br/ws/' . $consultar . '/json';

        $solicite = file_get_contents($url);
        $response = json_decode($solicite, true);

        return $response;
    }

    private function consultarEndereco($cep) {

        $consulta = $this->CEP($cep);

        if (!empty($consulta)) {
            return $endereco = $consulta['logradouro'];
        } else {
            return $endereco = '';
        }
    }

    private function consultarBairro($cep) {
        $consulta = $this->CEP($cep);

        if (!empty($consulta)) {
            return $bairro = $consulta['bairro'];
        } else {
            return $bairro = '';
        }
    }

    private function consultarCidade($cep) {
        $consulta = $this->CEP($cep);

        if (!empty($consulta)) {
            return $cidade = $consulta['localidade'];
        } else {
            return $cidade = '';
        }
    }

    private function consultarEstado($cep) {
        $consulta = $this->CEP($cep);

        if (!empty($consulta)) {
            return $estado = $consulta['uf'];
        } else {
            return $estado = '';
        }
    }

}
