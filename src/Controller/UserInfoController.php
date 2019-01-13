<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserInfo Controller
 *
 * @property \App\Model\Table\UserInfoTable $UserInfo
 *
 * @method \App\Model\Entity\UserInfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserInfoController extends AppController
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
        $userInfo = $this->paginate($this->UserInfo);

        $this->set(compact('userInfo'));
    }

    /**
     * View method
     *
     * @param string|null $id User Info id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userInfo = $this->UserInfo->get($id, [
            'contain' => ['User']
        ]);

        $this->set('userInfo', $userInfo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userInfo = $this->UserInfo->newEntity();
        if ($this->request->is('post')) {
            $userInfo = $this->UserInfo->patchEntity($userInfo, $this->request->getData());
            if ($this->UserInfo->save($userInfo)) {
                $this->Flash->success(__('The user info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user info could not be saved. Please, try again.'));
        }
        $user = $this->UserInfo->User->find('list', ['limit' => 200]);
        $this->set(compact('userInfo', 'user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Info id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userInfo = $this->UserInfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userInfo = $this->UserInfo->patchEntity($userInfo, $this->request->getData());
            if ($this->UserInfo->save($userInfo)) {
                $this->Flash->success(__('The user info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user info could not be saved. Please, try again.'));
        }
        $user = $this->UserInfo->User->find('list', ['limit' => 200]);
        $this->set(compact('userInfo', 'user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Info id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userInfo = $this->UserInfo->get($id);
        if ($this->UserInfo->delete($userInfo)) {
            $this->Flash->success(__('The user info has been deleted.'));
        } else {
            $this->Flash->error(__('The user info could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
