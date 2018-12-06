<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\Codigo;
use App\Model\Table\CodigosTable;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController {

    //Permite o  acesso público em  certas ações
    public function beforeFilter(\Cake\Event\Event $event) {
        //obtenho a sessão atual, e busco o id de regras salvo na tabela User
        $session = $this->request->getSession();
        if ($session->check('Auth.User')) {
            $permissao = $session->read('Auth.User');
        } else {
            $permissao['roles_id'] = 0;
        }

        //Classifico o nivel de acesso conforme o id presente na tabela Roles onde [1 = Administrador, 2= Super usuário, 3 = Aluno, 4 = público
        switch ($permissao['roles_id']) {
            case null:
                $this->Auth->allow(['registrar', 'logout', 'validar', 'cadastrar', 'login']);
                break;
            case 0:
                $this->Auth->allow(['registrar', 'logout', 'validar', 'cadastrar', 'login']);
                break;

            //Administradores
            case 1:
                $this->Auth->allow(['registrar', 'logout', 'validar', 'cadastrar', 'login', 'lembrar', 'perfil', 'index', 'add', 'edit', 'delete', 'codeativos', 'buscar', 'redirecionar']);
                break;

            //Super Usuários
            case 2:
                $this->Auth->allow(['registrar', 'logout', 'validar', 'cadastrar', 'login', 'lembrar', 'perfil', 'index', 'add', 'codeativos', 'buscar', 'redirecionar']);
                break;

            //Alunos
            case 3:
                $this->Auth->allow(['logout', 'validar', 'login', 'lembrar', 'perfil', 'validarCodigo', 'meuCodigo', 'redirecionar']);
                break;

            //Público
            case 4:
                $this->Auth->allow(['logout', 'validar', 'login', 'lembrar', 'perfil', 'validarCodigo', 'redirecionar']);
                break;
            default:
                $this->Auth->allow(['registrar', 'logout', 'validar', 'cadastrar', 'login']);
        }
    }

    //Gero Login utlizando o authComponent
    public function login() {
        //$session = $this->request->getSession();
        if ($this->request->is('post')) {
            //identifico o usuario
            $user = $this->Auth->identify();
            if ($user) {

                // defino a session do usuário Auth.User
                $this->Auth->setUser($user);


                $this->redirect(['controller' => 'Users', 'action' => 'redirecionar']);
            } else {
                $this->Flash->error(__('Opaa! Não reconhecemos este E-mail ou Senha.'));
            }
        }/*elseif($session->check('Auth.User')){//login por session
            
            $user = $this->Auth->identify();
            // defino a session do usuário Auth.User
            $this->Auth->setUser($user);
            $this->redirect(['controller' => 'Users', 'action' => 'redirecionar']);
        }*/
        $this->set(compact('users'));
        $this->render('login', 'initial');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function redirecionar() {
        // Obtenho a session do usuário Auth.User
        $session = $this->request->getSession();
        $getS = $session->read('Auth.User');

        //identifico e redireciono para a pagina inicial de cada um
        switch ($getS['roles_id']) {
            case null:
                $this->redirect(['controller' => 'Users', 'action' => 'logout']);
                break;
            case 0:
                $this->redirect(['controller' => 'Users', 'action' => 'logout']);
                break;

            //Administradores
            case 1:
                $this->redirect(['controller' => 'Users', 'action' => 'index']);
                break;

            //Super Usuários
            case 2:
                $this->redirect(['controller' => 'Users', 'action' => 'index']);
                break;

            //Alunos
            case 3:
                if($this->setSession()){
                if ($getS['codigos_id'] === 1028) {
                    $this->redirect(['controller' => 'Users', 'action' => 'validarCodigo']);
                } else {
                    $this->redirect(['controller' => 'Users', 'action' => 'meuCodigo']);
                }
                } else {
                    $this->Flash->error('Opaa! Por favor tente reiniciar ou limpar o cache do seu navegador');
                    $this->redirect(['controller' => 'Users', 'action' => 'logout']);
                }
                break;

            //Público
            case 4:
                $this->redirect(['controller' => 'Users', 'action' => 'validarCodigo']);
                break;

            default:
                $this->redirect(['controller' => 'Users', 'action' => 'logout']);
        }
    }

    private function setSession() {
        // Obtenho a session do usuário Auth.User
        $session = $this->request->getSession();
        if ($session->check('Auth.User')) {
            $getS = $session->read('Auth.User');
            //Obtenho o usuário a partir da ID na session
            $user = $this->Users->get($getS['id'], [
                'contain' => ['Perfis', 'Codigos', 'Roles']
            ]);

            //gravo uma nova session
            $session->write('Perfil', [
                //Acesso facilitado nas views
                'Perfil.nome' => $user->perfi->nome,
                'Perfil.img' => $user->perfi->img,
                'Codigo.code' => $user->codigo->code,
                'Role.role' => $user->role->role,
                'Config.language' => 'Pt-Br'
            ]);
            $this->Flash->success('Ufa! Sessão iniciada com sucesso');
            return true;
        } else {
            return false;
            $this->redirect(['controller' => 'Users', 'action' => 'logout']);
        }
    }

    public function lembrar() {
        //Obtenha o valor do cookie ou nulo se o cookie estiver faltando. 
        $rememberMe = $this->request->getCookie('remember_me');

        $this->request->trustProxy = true;

        // Esses métodos agora usarão os cabeçalhos com proxy. 
        $port = $this->request->port();
        $host = $this->request->host();
        $scheme = $this->request->scheme();
        $clientIp = $this->request->clientIp();
    }

    public function logout() {
        $session = $this->request->getSession();
        if ($session->check('Auth.User')) {
            $session->delete('Perfil');
            $session->delete('Auth.User');
            $session->destroy();
            $this->Flash->success('Tchau tchau! E até a próxima');
        } else {
            $this->Flash->error('Que Erro sinistro! Tente reiniciar o seu navegador, e verifique se você continua logado');
        }
        return $this->redirect($this->Auth->logout());
    }

    public function index() {
        $this->paginate = [
            'contain' => ['Perfis', 'Codigos', 'Roles']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $user = $this->Users->get($id, [
            'contain' => ['Perfis', 'Codigos', 'Roles']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar o usuário. Por favor tente novamente'));
        }
        $perfis = $this->Users->Perfis->find('list', ['limit' => 200]);
        $codigos = $this->Users->Codigos->find('list', ['limit' => 200]);
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'perfis', 'codigos', 'roles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Alterações salvas com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao editar o usuário. Por favor tente novamente'));
        }
        $perfis = $this->Users->Perfis->find('list', ['limit' => 200]);
        $codigos = $this->Users->Codigos->find('list', ['limit' => 200]);
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'perfis', 'codigos', 'roles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('O usuário foi deletado'));
        } else {
            $this->Flash->error(__('Erro ao deletar o usuário. Por favor tente novamente'));
        }

        return $this->redirect(['action' => 'index']);
    }

    private function buscarCode($itaOuMed, $quantRetornos, $ativacao = true) {
        $codigos = $this->loadModel('Codigos');
        //$query = $codigos->findAllByAtivacao(0);

        //Gerar um array contendo todos os codigos ativos identificado por (int)id = { object entity da tabela codigos }
        //$data = $query->toArray();

        //Apartir do parametro $ItaouMed recebido, return um codigo para o solicitador
        switch ($itaOuMed) {
            case 0:
                $this->Flash->error('Error Fatal');
                $this->redirect(['action' => 'logout']);
                return $data = null;
                break;
            case 1:
                $this->Flash->error('A sua conta foi desativada entre em contato com a Educafro para maiores informações');
                return $data = null;
                break;
            case 2:
                //Retorno todos os codigos do itafro que não foram ativados e seleciono o primeiro.
				$query = $codigos->find('all')
								 ->select(['id', 'ativacao', 'code'])
								 ->where(['ativacao !=' => true, 'id >=' => 1, 'id <=' => 200]);
				
				$data = $query->first();
				
				if (!empty($data)) {

                        //Altero o valor do campo ativacao e salvo a entity, retornando um array com id e code
                        $codigo = $codigos->patchEntity($data, $this->request->getData());
                        $codigo->ativacao = true;
                        if ($codigos->save($codigo)) {
                            $code = ['id' => $codigo->id, 'code' => $codigo->code];
                        }
                        return $code;
                        break;
                    }
                $code = ['id' => 1028, 'code' => 'Acabou os CÓDIGOS do ITAFRO'];
                return $code;
                break;
            case 3:
                 //Retorno todos os codigos do itafro que não foram ativados e seleciono o primeiro.
				$query = $codigos->find('all')
								 ->select(['id', 'ativacao', 'code'])
								 ->where(['ativacao !=' => true, 'id >=' => 201, 'id <=' => 1000]);
				
				$data = $query->first();
				
				if (!empty($data)) {

                        //Altero o valor do campo ativacao e salvo a entity, retornando um array com id e code
                        $codigo = $codigos->patchEntity($data, $this->request->getData());
                        $codigo->ativacao = true;
                        if ($codigos->save($codigo)) {
                            $code = ['id' => $codigo->id, 'code' => $codigo->code];
                        }
                        return $code;
                        break;
                    }
                $code = ['id' => 1028, 'code' => 'Acabou os CÓDIGOS do ITAFRO'];
                return $code;
                break;
            case 4:
                $this->Flash->error('Você não foi identificado como aluno ITAFRO ou aluno MEDAFRO, entre em contato e solicite seu código na EDUCAFRO');
                return $data = null;
                break;
            default:
                $this->Flash->error('Error Fatal');
                $this->redirect(['action' => 'logout']);
                return $data = null;
                break;
        }
    }

    public function codeativos() {

        $codeAtivos = $this->Users->Codigos->find('all', [
            'conditions' => ['Codigos.code LIKE' => true],
            'valueField' => 'codigo.code',
            //para um código mais DRY extrairei '200 ou menos' do itafro, restando '100 ou mais' para o medafro a cada loop
            'limit' => 300
        ]);

        $this->set(compact('users', $codeAtivos));
    }

    public function buscar($q = null) {
        $query = $this->Users->FindByUsername(is_string($q));

        $this->set(compact($query));
    }

    private function obterCodigo(array $getS, $user, $session, int $tipo) {
        //como parametro recebo o array $getS contendo os dados da session(Auth.User), e um objeto patchEntity do $user, junto com a leitura da $session, e o $tipo do aluno
        //recebo um array contendo a id e o code de um codigo ativo
        $codeAtivo = $this->buscarCode($tipo, 1);
        if (!empty($codeAtivo)) {

            //atribuo ele ao usuario tanto no banco quanto na session

            $user = $this->Users->get($user->id, ['contain' => []]);
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->codigos_id = $codeAtivo['id'];
            $Code = $codeAtivo['code'];

            //Salvando alterações em codigos e usuarios
            if ($this->Users->save($user)) {
                $this->Flash->success('Este é o seu novo Código', $Code);
                $this->redirect(['controller' => 'Users', 'action' => 'login']);
                return $Code;
            }
        } else {
            $this->Flash->error('Erro em obter o seu código');
        }
    }

    public function validarCodigo($id = null) {
        $session = $this->request->getSession();
        $getS = $session->read('Auth.User');

        //resposta para validar_codigo.ctp
        $response = ['validar' => false, 'arrayCode' => null];

        if ($getS['id'] == $id) {
					
			$type = strtolower($getS['type']);
            if ($type == 'itafro') {
                $tipo = 2;
            } elseif ($type == 'med-afro' OR $type == 'medafro'  ) {
                $tipo = 3;
            } else {
                $tipo = 4;
            }

            //Permite apenas usuarios do itafro ou do medafro baseado na session atual
            if ($tipo == 2 || $tipo == 3) {
                $user = $this->Users->get($id, [
                    'contain' => []
                ]);

                $user = $this->Users->patchEntity($user, $this->request->getData());
                //Verifico se o codigo atual do Usuario é o padrão, comparando-o com o banco e a session;
                if ($user->codigos_id == 1028 && $user->codigos_id == $getS['codigos_id']) {
                    $response = ['validar' => true,
								 'arrayCode' => $this->obterCodigo($getS, $user, $session, $tipo)];


                    if (!empty($reponse['arrayCode'])) {
						// redifino a session e direciono o usuario para a página do código
						if(setSession()){
							$this->redirect(['controller' => 'Users', 'action' => 'meuCodigo']);
						}else{
							$this->Flash->success('Código adquirido com sucesso, faça login novamente');
							$this->redirect(['controller' => 'Users', 'action' => 'logout']);
						}
                    } else {
                        $this->Flash->error('Erro em obter Código');
                    }
                } else {
                    $this->Flash->error('Você não pode adquirir mais do que um código, utilize o seu!', $getS['codigo.code']);
                    $response = ['validar' => false,
								 'arrayCode' => null];
                    $this->redirect(['controller' => 'Users', 'action' => 'meuCodigo']);
                }
            } else {
                $this->Flash->error('Você não pode adquirir um código se não estiver cadastrado no Itafro ou no MedAfro');
                $response = ['validar' => false,
							 'arrayCode' => null];
            }
        }

        $this->render('validar_codigo', 'public');
        $this->set(compact('users', $response));
    }

    public function meuCodigo(){

        $this->set(compact('users'));
        $this->render('meu_codigo', 'public');
    }

}
