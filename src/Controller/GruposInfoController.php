<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GruposInfo Controller
 *
 * @property \App\Model\Table\GruposInfoTable $GruposInfo
 *
 * @method \App\Model\Entity\GruposInfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GruposInfoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grupos', 'Modificadores']
        ];
        $gruposInfo = $this->paginate($this->GruposInfo);

        $this->set(compact('gruposInfo'));
    }

    /**
     * View method
     *
     * @param string|null $id Grupos Info id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gruposInfo = $this->GruposInfo->get($id, [
            'contain' => ['Grupos', 'Modificadores']
        ]);

        $this->set('gruposInfo', $gruposInfo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gruposInfo = $this->GruposInfo->newEntity();
        if ($this->request->is('post')) {
            $gruposInfo = $this->GruposInfo->patchEntity($gruposInfo, $this->request->getData());
            if ($this->GruposInfo->save($gruposInfo)) {
                $this->Flash->success(__('The grupos info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos info could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposInfo->Grupos->find('list', ['limit' => 200]);
        $modificadores = $this->GruposInfo->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('gruposInfo', 'grupos', 'modificadores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Grupos Info id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gruposInfo = $this->GruposInfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gruposInfo = $this->GruposInfo->patchEntity($gruposInfo, $this->request->getData());
            if ($this->GruposInfo->save($gruposInfo)) {
                $this->Flash->success(__('The grupos info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos info could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposInfo->Grupos->find('list', ['limit' => 200]);
        $modificadores = $this->GruposInfo->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('gruposInfo', 'grupos', 'modificadores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Grupos Info id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gruposInfo = $this->GruposInfo->get($id);
        if ($this->GruposInfo->delete($gruposInfo)) {
            $this->Flash->success(__('The grupos info has been deleted.'));
        } else {
            $this->Flash->error(__('The grupos info could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
