<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserCadastro Controller
 *
 * @property \App\Model\Table\UserCadastroTable $UserCadastro
 *
 * @method \App\Model\Entity\UserCadastro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserCadastroController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Modificadores']
        ];
        $userCadastro = $this->paginate($this->UserCadastro);

        $this->set(compact('userCadastro'));
    }

    /**
     * View method
     *
     * @param string|null $id User Cadastro id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userCadastro = $this->UserCadastro->get($id, [
            'contain' => ['Modificadores', 'User']
        ]);

        $this->set('userCadastro', $userCadastro);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userCadastro = $this->UserCadastro->newEntity();
        if ($this->request->is('post')) {
            $userCadastro = $this->UserCadastro->patchEntity($userCadastro, $this->request->getData());
            if ($this->UserCadastro->save($userCadastro)) {
                $this->Flash->success(__('The user cadastro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user cadastro could not be saved. Please, try again.'));
        }
        $modificadores = $this->UserCadastro->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('userCadastro', 'modificadores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Cadastro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userCadastro = $this->UserCadastro->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userCadastro = $this->UserCadastro->patchEntity($userCadastro, $this->request->getData());
            if ($this->UserCadastro->save($userCadastro)) {
                $this->Flash->success(__('The user cadastro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user cadastro could not be saved. Please, try again.'));
        }
        $modificadores = $this->UserCadastro->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('userCadastro', 'modificadores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Cadastro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userCadastro = $this->UserCadastro->get($id);
        if ($this->UserCadastro->delete($userCadastro)) {
            $this->Flash->success(__('The user cadastro has been deleted.'));
        } else {
            $this->Flash->error(__('The user cadastro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
