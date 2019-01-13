<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserHistoricoAcoes Controller
 *
 * @property \App\Model\Table\UserHistoricoAcoesTable $UserHistoricoAcoes
 *
 * @method \App\Model\Entity\UserHistoricoAco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserHistoricoAcoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['User', 'Log']
        ];
        $userHistoricoAcoes = $this->paginate($this->UserHistoricoAcoes);

        $this->set(compact('userHistoricoAcoes'));
    }

    /**
     * View method
     *
     * @param string|null $id User Historico Aco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userHistoricoAco = $this->UserHistoricoAcoes->get($id, [
            'contain' => ['User', 'Log']
        ]);

        $this->set('userHistoricoAco', $userHistoricoAco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userHistoricoAco = $this->UserHistoricoAcoes->newEntity();
        if ($this->request->is('post')) {
            $userHistoricoAco = $this->UserHistoricoAcoes->patchEntity($userHistoricoAco, $this->request->getData());
            if ($this->UserHistoricoAcoes->save($userHistoricoAco)) {
                $this->Flash->success(__('The user historico aco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user historico aco could not be saved. Please, try again.'));
        }
        $user = $this->UserHistoricoAcoes->User->find('list', ['limit' => 200]);
        $log = $this->UserHistoricoAcoes->Log->find('list', ['limit' => 200]);
        $this->set(compact('userHistoricoAco', 'user', 'log'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Historico Aco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userHistoricoAco = $this->UserHistoricoAcoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userHistoricoAco = $this->UserHistoricoAcoes->patchEntity($userHistoricoAco, $this->request->getData());
            if ($this->UserHistoricoAcoes->save($userHistoricoAco)) {
                $this->Flash->success(__('The user historico aco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user historico aco could not be saved. Please, try again.'));
        }
        $user = $this->UserHistoricoAcoes->User->find('list', ['limit' => 200]);
        $log = $this->UserHistoricoAcoes->Log->find('list', ['limit' => 200]);
        $this->set(compact('userHistoricoAco', 'user', 'log'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Historico Aco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userHistoricoAco = $this->UserHistoricoAcoes->get($id);
        if ($this->UserHistoricoAcoes->delete($userHistoricoAco)) {
            $this->Flash->success(__('The user historico aco has been deleted.'));
        } else {
            $this->Flash->error(__('The user historico aco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
