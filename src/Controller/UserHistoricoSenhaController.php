<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserHistoricoSenha Controller
 *
 * @property \App\Model\Table\UserHistoricoSenhaTable $UserHistoricoSenha
 *
 * @method \App\Model\Entity\UserHistoricoSenha[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserHistoricoSenhaController extends AppController
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
        $userHistoricoSenha = $this->paginate($this->UserHistoricoSenha);

        $this->set(compact('userHistoricoSenha'));
    }

    /**
     * View method
     *
     * @param string|null $id User Historico Senha id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userHistoricoSenha = $this->UserHistoricoSenha->get($id, [
            'contain' => ['User']
        ]);

        $this->set('userHistoricoSenha', $userHistoricoSenha);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userHistoricoSenha = $this->UserHistoricoSenha->newEntity();
        if ($this->request->is('post')) {
            $userHistoricoSenha = $this->UserHistoricoSenha->patchEntity($userHistoricoSenha, $this->request->getData());
            if ($this->UserHistoricoSenha->save($userHistoricoSenha)) {
                $this->Flash->success(__('The user historico senha has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user historico senha could not be saved. Please, try again.'));
        }
        $user = $this->UserHistoricoSenha->User->find('list', ['limit' => 200]);
        $this->set(compact('userHistoricoSenha', 'user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Historico Senha id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userHistoricoSenha = $this->UserHistoricoSenha->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userHistoricoSenha = $this->UserHistoricoSenha->patchEntity($userHistoricoSenha, $this->request->getData());
            if ($this->UserHistoricoSenha->save($userHistoricoSenha)) {
                $this->Flash->success(__('The user historico senha has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user historico senha could not be saved. Please, try again.'));
        }
        $user = $this->UserHistoricoSenha->User->find('list', ['limit' => 200]);
        $this->set(compact('userHistoricoSenha', 'user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Historico Senha id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userHistoricoSenha = $this->UserHistoricoSenha->get($id);
        if ($this->UserHistoricoSenha->delete($userHistoricoSenha)) {
            $this->Flash->success(__('The user historico senha has been deleted.'));
        } else {
            $this->Flash->error(__('The user historico senha could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
