<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdministradoresTokens Controller
 *
 * @property \App\Model\Table\AdministradoresTokensTable $AdministradoresTokens
 *
 * @method \App\Model\Entity\AdministradoresToken[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdministradoresTokensController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Administradores']
        ];
        $administradoresTokens = $this->paginate($this->AdministradoresTokens);

        $this->set(compact('administradoresTokens'));
    }

    /**
     * View method
     *
     * @param string|null $id Administradores Token id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $administradoresToken = $this->AdministradoresTokens->get($id, [
            'contain' => ['Administradores']
        ]);

        $this->set('administradoresToken', $administradoresToken);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $administradoresToken = $this->AdministradoresTokens->newEntity();
        if ($this->request->is('post')) {
            $administradoresToken = $this->AdministradoresTokens->patchEntity($administradoresToken, $this->request->getData());
            if ($this->AdministradoresTokens->save($administradoresToken)) {
                $this->Flash->success(__('The administradores token has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administradores token could not be saved. Please, try again.'));
        }
        $administradores = $this->AdministradoresTokens->Administradores->find('list', ['limit' => 200]);
        $this->set(compact('administradoresToken', 'administradores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Administradores Token id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $administradoresToken = $this->AdministradoresTokens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $administradoresToken = $this->AdministradoresTokens->patchEntity($administradoresToken, $this->request->getData());
            if ($this->AdministradoresTokens->save($administradoresToken)) {
                $this->Flash->success(__('The administradores token has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administradores token could not be saved. Please, try again.'));
        }
        $administradores = $this->AdministradoresTokens->Administradores->find('list', ['limit' => 200]);
        $this->set(compact('administradoresToken', 'administradores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Administradores Token id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $administradoresToken = $this->AdministradoresTokens->get($id);
        if ($this->AdministradoresTokens->delete($administradoresToken)) {
            $this->Flash->success(__('The administradores token has been deleted.'));
        } else {
            $this->Flash->error(__('The administradores token could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
