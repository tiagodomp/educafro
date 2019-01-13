<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GruposDeDiscentes Controller
 *
 * @property \App\Model\Table\GruposDeDiscentesTable $GruposDeDiscentes
 *
 * @method \App\Model\Entity\GruposDeDiscente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GruposDeDiscentesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grupos', 'Discentes']
        ];
        $gruposDeDiscentes = $this->paginate($this->GruposDeDiscentes);

        $this->set(compact('gruposDeDiscentes'));
    }

    /**
     * View method
     *
     * @param string|null $id Grupos De Discente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gruposDeDiscente = $this->GruposDeDiscentes->get($id, [
            'contain' => ['Grupos', 'Discentes']
        ]);

        $this->set('gruposDeDiscente', $gruposDeDiscente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gruposDeDiscente = $this->GruposDeDiscentes->newEntity();
        if ($this->request->is('post')) {
            $gruposDeDiscente = $this->GruposDeDiscentes->patchEntity($gruposDeDiscente, $this->request->getData());
            if ($this->GruposDeDiscentes->save($gruposDeDiscente)) {
                $this->Flash->success(__('The grupos de discente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos de discente could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposDeDiscentes->Grupos->find('list', ['limit' => 200]);
        $discentes = $this->GruposDeDiscentes->Discentes->find('list', ['limit' => 200]);
        $this->set(compact('gruposDeDiscente', 'grupos', 'discentes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Grupos De Discente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gruposDeDiscente = $this->GruposDeDiscentes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gruposDeDiscente = $this->GruposDeDiscentes->patchEntity($gruposDeDiscente, $this->request->getData());
            if ($this->GruposDeDiscentes->save($gruposDeDiscente)) {
                $this->Flash->success(__('The grupos de discente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos de discente could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposDeDiscentes->Grupos->find('list', ['limit' => 200]);
        $discentes = $this->GruposDeDiscentes->Discentes->find('list', ['limit' => 200]);
        $this->set(compact('gruposDeDiscente', 'grupos', 'discentes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Grupos De Discente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gruposDeDiscente = $this->GruposDeDiscentes->get($id);
        if ($this->GruposDeDiscentes->delete($gruposDeDiscente)) {
            $this->Flash->success(__('The grupos de discente has been deleted.'));
        } else {
            $this->Flash->error(__('The grupos de discente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
