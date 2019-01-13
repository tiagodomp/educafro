<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GruposHistorico Controller
 *
 * @property \App\Model\Table\GruposHistoricoTable $GruposHistorico
 *
 * @method \App\Model\Entity\GruposHistorico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GruposHistoricoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Log', 'Grupos']
        ];
        $gruposHistorico = $this->paginate($this->GruposHistorico);

        $this->set(compact('gruposHistorico'));
    }

    /**
     * View method
     *
     * @param string|null $id Grupos Historico id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gruposHistorico = $this->GruposHistorico->get($id, [
            'contain' => ['Log', 'Grupos']
        ]);

        $this->set('gruposHistorico', $gruposHistorico);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gruposHistorico = $this->GruposHistorico->newEntity();
        if ($this->request->is('post')) {
            $gruposHistorico = $this->GruposHistorico->patchEntity($gruposHistorico, $this->request->getData());
            if ($this->GruposHistorico->save($gruposHistorico)) {
                $this->Flash->success(__('The grupos historico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos historico could not be saved. Please, try again.'));
        }
        $log = $this->GruposHistorico->Log->find('list', ['limit' => 200]);
        $grupos = $this->GruposHistorico->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('gruposHistorico', 'log', 'grupos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Grupos Historico id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gruposHistorico = $this->GruposHistorico->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gruposHistorico = $this->GruposHistorico->patchEntity($gruposHistorico, $this->request->getData());
            if ($this->GruposHistorico->save($gruposHistorico)) {
                $this->Flash->success(__('The grupos historico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos historico could not be saved. Please, try again.'));
        }
        $log = $this->GruposHistorico->Log->find('list', ['limit' => 200]);
        $grupos = $this->GruposHistorico->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('gruposHistorico', 'log', 'grupos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Grupos Historico id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gruposHistorico = $this->GruposHistorico->get($id);
        if ($this->GruposHistorico->delete($gruposHistorico)) {
            $this->Flash->success(__('The grupos historico has been deleted.'));
        } else {
            $this->Flash->error(__('The grupos historico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
