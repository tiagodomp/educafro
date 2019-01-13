<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Notificacoes Controller
 *
 * @property \App\Model\Table\NotificacoesTable $Notificacoes
 *
 * @method \App\Model\Entity\Notificaco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NotificacoesController extends AppController
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
        $notificacoes = $this->paginate($this->Notificacoes);

        $this->set(compact('notificacoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Notificaco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $notificaco = $this->Notificacoes->get($id, [
            'contain' => ['User']
        ]);

        $this->set('notificaco', $notificaco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $notificaco = $this->Notificacoes->newEntity();
        if ($this->request->is('post')) {
            $notificaco = $this->Notificacoes->patchEntity($notificaco, $this->request->getData());
            if ($this->Notificacoes->save($notificaco)) {
                $this->Flash->success(__('The notificaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notificaco could not be saved. Please, try again.'));
        }
        $user = $this->Notificacoes->User->find('list', ['limit' => 200]);
        $this->set(compact('notificaco', 'user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Notificaco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $notificaco = $this->Notificacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notificaco = $this->Notificacoes->patchEntity($notificaco, $this->request->getData());
            if ($this->Notificacoes->save($notificaco)) {
                $this->Flash->success(__('The notificaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notificaco could not be saved. Please, try again.'));
        }
        $user = $this->Notificacoes->User->find('list', ['limit' => 200]);
        $this->set(compact('notificaco', 'user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Notificaco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notificaco = $this->Notificacoes->get($id);
        if ($this->Notificacoes->delete($notificaco)) {
            $this->Flash->success(__('The notificaco has been deleted.'));
        } else {
            $this->Flash->error(__('The notificaco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
