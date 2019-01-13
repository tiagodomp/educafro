<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserPreferencias Controller
 *
 * @property \App\Model\Table\UserPreferenciasTable $UserPreferencias
 *
 * @method \App\Model\Entity\UserPreferencia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserPreferenciasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['User']
        ];
        $userPreferencias = $this->paginate($this->UserPreferencias);

        $this->set(compact('userPreferencias'));
    }

    /**
     * View method
     *
     * @param string|null $id User Preferencia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userPreferencia = $this->UserPreferencias->get($id, [
            'contain' => ['User']
        ]);

        $this->set('userPreferencia', $userPreferencia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userPreferencia = $this->UserPreferencias->newEntity();
        if ($this->request->is('post')) {
            $userPreferencia = $this->UserPreferencias->patchEntity($userPreferencia, $this->request->getData());
            if ($this->UserPreferencias->save($userPreferencia)) {
                $this->Flash->success(__('The user preferencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user preferencia could not be saved. Please, try again.'));
        }
        $user = $this->UserPreferencias->User->find('list', ['limit' => 200]);
        $this->set(compact('userPreferencia', 'user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Preferencia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userPreferencia = $this->UserPreferencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userPreferencia = $this->UserPreferencias->patchEntity($userPreferencia, $this->request->getData());
            if ($this->UserPreferencias->save($userPreferencia)) {
                $this->Flash->success(__('The user preferencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user preferencia could not be saved. Please, try again.'));
        }
        $user = $this->UserPreferencias->User->find('list', ['limit' => 200]);
        $this->set(compact('userPreferencia', 'user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Preferencia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userPreferencia = $this->UserPreferencias->get($id);
        if ($this->UserPreferencias->delete($userPreferencia)) {
            $this->Flash->success(__('The user preferencia has been deleted.'));
        } else {
            $this->Flash->error(__('The user preferencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
