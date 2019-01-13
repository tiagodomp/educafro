<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Discentes Controller
 *
 * @property \App\Model\Table\DiscentesTable $Discentes
 *
 * @method \App\Model\Entity\Discente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DiscentesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['User', 'Regras']
        ];
        $discentes = $this->paginate($this->Discentes);

        $this->set(compact('discentes'));
    }

    /**
     * View method
     *
     * @param string|null $id Discente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $discente = $this->Discentes->get($id, [
            'contain' => ['User', 'Regras']
        ]);

        $this->set('discente', $discente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $discente = $this->Discentes->newEntity();
        if ($this->request->is('post')) {
            $discente = $this->Discentes->patchEntity($discente, $this->request->getData());
            if ($this->Discentes->save($discente)) {
                $this->Flash->success(__('The discente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The discente could not be saved. Please, try again.'));
        }
        $user = $this->Discentes->User->find('list', ['limit' => 200]);
        $regras = $this->Discentes->Regras->find('list', ['limit' => 200]);
        $this->set(compact('discente', 'user', 'regras'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Discente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $discente = $this->Discentes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $discente = $this->Discentes->patchEntity($discente, $this->request->getData());
            if ($this->Discentes->save($discente)) {
                $this->Flash->success(__('The discente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The discente could not be saved. Please, try again.'));
        }
        $user = $this->Discentes->User->find('list', ['limit' => 200]);
        $regras = $this->Discentes->Regras->find('list', ['limit' => 200]);
        $this->set(compact('discente', 'user', 'regras'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Discente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $discente = $this->Discentes->get($id);
        if ($this->Discentes->delete($discente)) {
            $this->Flash->success(__('The discente has been deleted.'));
        } else {
            $this->Flash->error(__('The discente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
