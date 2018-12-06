<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Perfis Controller
 *
 * @property \App\Model\Table\PerfisTable $Perfis
 *
 * @method \App\Model\Entity\Perfi[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PerfisController extends AppController
{

    //Permite o  acesso público em  certas ações
    public function beforeFilter(\Cake\Event\Event $event)
    {   
        //obtenho a sessão atual, e busco o id de regras salvo na tabela User
        $session = $this->request->getSession();
        if(isset($session)){
            $permissao = $session->read('User.roles_id');
        }else{
            $permissao = null;
        }
        
        //Classifico o nivel de acesso conforme o id presente na tabela Roles onde [1 = Administrador, 2= Super usuário, 3 = Aluno, 4 = público 
        switch ($permissao){
            case null:
                $this->Auth->allow(['perfil']);
                break;
            case 0:
                $this->redirect(['controller' => 'Users', 'action' => 'login']);
                break;
            case 1:
                $this->Auth->allow(['perfil', 'index', 'add', 'edit', 'delete']);
                break;
            case 2:
                $this->Auth->allow(['perfil', 'index', 'add']);
                break;
            case 3:
                $this->Auth->allow(['perfil']);
                break;
            case 4:
                $this->redirect(['controller' => 'Users', 'action' => 'login']);
                break;
        }
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $perfis = $this->paginate($this->Perfis);

        $this->set(compact('perfis'));
    }

    /**
     * View method
     *
     * @param string|null $id Perfi id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perfi = $this->Perfis->get($id, [
            'contain' => []
        ]);

        $this->set('perfi', $perfi);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $perfi = $this->Perfis->newEntity();
        if ($this->request->is('post')) {
            $perfi = $this->Perfis->patchEntity($perfi, $this->request->getData());
            if ($this->Perfis->save($perfi)) {
                $this->Flash->success(__('O perfil foi salvo'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar o perfil. Por favor tente novamente '));
        }
        $this->set(compact('perfi'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Perfi id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $perfi = $this->Perfis->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $perfi = $this->Perfis->patchEntity($perfi, $this->request->getData());
            if ($this->Perfis->save($perfi)) {
                $this->Flash->success(__('O perfil foi editado'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao editar o perfil. Por favor tente novamente'));
        }
        $this->set(compact('perfi'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Perfi id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perfi = $this->Perfis->get($id);
        if ($this->Perfis->delete($perfi)) {
            $this->Flash->success(__('O perfil foi apagado'));
        } else {
            $this->Flash->error(__('Erro ao apagar perfil, por favor tente novamente'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    
    /*
     * Ações para area pública do sistema, alternando para o src/Template/Layout => public.ctp
     * 
     * 
     * 
     * 
     * 
     */    
    public function perfil()
    {
        
        $session = $this->request->getSession();
        $perfil = $session->read('Auth.User');

        if($perfil['User.codigos_id'] === 1028){

        }

        
        
        $this->viewBuilder()->setLayout('perfil', $perfil);
        $this->render('perfil', 'public');
    }
}
