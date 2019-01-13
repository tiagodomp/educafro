<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserAtribuicoes Controller
 *
 * @property \App\Model\Table\UserAtribuicoesTable $UserAtribuicoes
 *
 * @method \App\Model\Entity\UserAtribuico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserAtribuicoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['User', 'Eventos']
        ];
        $userAtribuicoes = $this->paginate($this->UserAtribuicoes);

        $this->set(compact('userAtribuicoes'));
    }

    /**
     * View method
     *
     * @param string|null $id User Atribuico id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userAtribuico = $this->UserAtribuicoes->get($id, [
            'contain' => ['User', 'Eventos']
        ]);

        $this->set('userAtribuico', $userAtribuico);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userAtribuico = $this->UserAtribuicoes->newEntity();
        if ($this->request->is('post')) {
            $userAtribuico = $this->UserAtribuicoes->patchEntity($userAtribuico, $this->request->getData());
            if ($this->UserAtribuicoes->save($userAtribuico)) {
                $this->Flash->success(__('The user atribuico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user atribuico could not be saved. Please, try again.'));
        }
        $user = $this->UserAtribuicoes->User->find('list', ['limit' => 200]);
        $eventos = $this->UserAtribuicoes->Eventos->find('list', ['limit' => 200]);
        $this->set(compact('userAtribuico', 'user', 'eventos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Atribuico id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userAtribuico = $this->UserAtribuicoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userAtribuico = $this->UserAtribuicoes->patchEntity($userAtribuico, $this->request->getData());
            if ($this->UserAtribuicoes->save($userAtribuico)) {
                $this->Flash->success(__('The user atribuico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user atribuico could not be saved. Please, try again.'));
        }
        $user = $this->UserAtribuicoes->User->find('list', ['limit' => 200]);
        $eventos = $this->UserAtribuicoes->Eventos->find('list', ['limit' => 200]);
        $this->set(compact('userAtribuico', 'user', 'eventos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Atribuico id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userAtribuico = $this->UserAtribuicoes->get($id);
        if ($this->UserAtribuicoes->delete($userAtribuico)) {
            $this->Flash->success(__('The user atribuico has been deleted.'));
        } else {
            $this->Flash->error(__('The user atribuico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
