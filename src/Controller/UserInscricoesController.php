<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserInscricoes Controller
 *
 * @property \App\Model\Table\UserInscricoesTable $UserInscricoes
 *
 * @method \App\Model\Entity\UserInscrico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserInscricoesController extends AppController
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
        $userInscricoes = $this->paginate($this->UserInscricoes);

        $this->set(compact('userInscricoes'));
    }

    /**
     * View method
     *
     * @param string|null $id User Inscrico id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userInscrico = $this->UserInscricoes->get($id, [
            'contain' => ['User']
        ]);

        $this->set('userInscrico', $userInscrico);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userInscrico = $this->UserInscricoes->newEntity();
        if ($this->request->is('post')) {
            $userInscrico = $this->UserInscricoes->patchEntity($userInscrico, $this->request->getData());
            if ($this->UserInscricoes->save($userInscrico)) {
                $this->Flash->success(__('The user inscrico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user inscrico could not be saved. Please, try again.'));
        }
        $user = $this->UserInscricoes->User->find('list', ['limit' => 200]);
        $this->set(compact('userInscrico', 'user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Inscrico id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userInscrico = $this->UserInscricoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userInscrico = $this->UserInscricoes->patchEntity($userInscrico, $this->request->getData());
            if ($this->UserInscricoes->save($userInscrico)) {
                $this->Flash->success(__('The user inscrico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user inscrico could not be saved. Please, try again.'));
        }
        $user = $this->UserInscricoes->User->find('list', ['limit' => 200]);
        $this->set(compact('userInscrico', 'user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Inscrico id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userInscrico = $this->UserInscricoes->get($id);
        if ($this->UserInscricoes->delete($userInscrico)) {
            $this->Flash->success(__('The user inscrico has been deleted.'));
        } else {
            $this->Flash->error(__('The user inscrico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
