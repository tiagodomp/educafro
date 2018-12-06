<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Registros Controller
 *
 * @property \App\Model\Table\RegistrosTable $Registros
 *
 * @method \App\Model\Entity\Registro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RegistrosController extends AppController
{

    public function beforeFilter(\Cake\Event\Event $event)
    {
        //obtenho a sessão atual, e busco o id de regras salvo na tabela User
        $session = $this->request->getSession();
        if($session->check('User')){
            $permissao = $session->read('User');
        }else{
            $permissao['User.roles_id'] = null;
        }

        //Classifico o nivel de acesso conforme o id presente na tabela Roles onde [1 = Administrador, 2= Super usuário, 3 = Aluno, 4 = público
        switch ($permissao['User.roles_id']){
            case null:
                $this->Auth->allow(['registro']);
                break;
            case 0:
                $this->redirect(['controller' => 'Users', 'action' => 'login']);
                break;
            case 1:
                $this->Auth->allow(['registro', 'index', 'add', 'edit', 'delete']);
                break;
            case 2:
                $this->Auth->allow(['registro', 'index', 'add']);
                break;
            case 3:
                $this->Auth->allow(['meuRegistro']);
                break;
            case 4:
                $this->redirect(['controller' => 'Users', 'action' => 'login']);
                break;
        }
        $session->delete('Registros');
        $session->delete('Validar');
        $session->delete('Flash');
        $session->destroy();
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function registro()
    {
        $registro = $this->Registros->newEntity();
        if ($this->request->is('post')) {
            $registro = $this->Registros->patchEntity($registro, $this->request->getData());			
            if ($this->Registros->save($registro)) {
                $this->Flash->success(__('Ook! Estamos validando seu Registro'));
                if($this->enviarSession($registro)){
                    return $this->redirect(['controller' => 'Validar', 'action' => 'validar']);
                }else{
                    $this->Flash->error(__('Vixi! algo deu errado, recarregue a página e tente novamente'));
                }
            }
            $this->Flash->error(__('Vixi! alguma coisa deu errado, recarregue a página e tente novamente'));
        }
        $this->set(compact('registro'));
        $this->render('registro', 'initial');
    }

    private function enviarSession($data)
    {
        $session = $this->request->getSession();

        if (isset($session)) {
            $session->write('Registro', [
                'User.id' => $data->id,
                'User.username' => $data->username,
                'User.senha' => $data->password,
                'User.email' => $data->email,
                'User.remember_token' => $data->lembrar,
                'User.google' => null,
                'User.created' => null,
                'User.modified' => null,
                'User.oauth_provider' => null,
                'User.oauth_uid' => null,
                'User.first_name' => null,
                'User.last_name' => null,
                'User.gender' => null,
                'User.locale' => null,
                'User.cover' => null,
                'User.picture' => null,
                'User.link' => null,
                'User.type' => 1,
                'User.codigos_id' => 1028,
                'User.roles_id' => 4,

                //Acesso facilitado nas views
                'User.perfis_id' => null,
                'User.perfi.nome' => null,
                'User.perfi.img' => null,
                'User.perfi.rg' => null,
                'User.perfi.cpf' => $data->cpf,
                'User.perfi.cep' => null,
                'User.perfi.endnum' => null,
                'User.contato.num' => null,
                'User.codigo.code' => 'ITAeMED_C0D3EX3MP!03DU(4FR0',
                'User.role.role' => 'Alunos',
                'Config.language' => 'Pt-Br'
            ]);
            return true;
        } else {
            $this->Flash->error('Opaa! Por favor tente reiniciar ou limpar o cache do seu navegador');
            return false;
        }
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $registros = $this->paginate($this->Registros);

        $this->set(compact('registros'));
    }

    /**
     * View method
     *
     * @param string|null $id Registro id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $registro = $this->Registros->get($id, [
            'contain' => []
        ]);

        $this->set('registro', $registro);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $registro = $this->Registros->newEntity();
        if ($this->request->is('post')) {
            $registro = $this->Registros->patchEntity($registro, $this->request->getData());
            if ($this->Registros->save($registro)) {
                $this->Flash->success(__('The registro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registro could not be saved. Please, try again.'));
        }
        $this->set(compact('registro'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Registro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $registro = $this->Registros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registro = $this->Registros->patchEntity($registro, $this->request->getData());
            if ($this->Registros->save($registro)) {
                $this->Flash->success(__('The registro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registro could not be saved. Please, try again.'));
        }
        $this->set(compact('registro'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Registro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registro = $this->Registros->get($id);
        if ($this->Registros->delete($registro)) {
            $this->Flash->success(__('The registro has been deleted.'));
        } else {
            $this->Flash->error(__('The registro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
