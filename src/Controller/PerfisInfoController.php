<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PerfisInfo Controller
 *
 * @property \App\Model\Table\PerfisInfoTable $PerfisInfo
 *
 * @method \App\Model\Entity\PerfisInfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PerfisInfoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Perfis', 'PerfisUsers']
        ];
        $perfisInfo = $this->paginate($this->PerfisInfo);

        $this->set(compact('perfisInfo'));
    }

    /**
     * View method
     *
     * @param string|null $id Perfis Info id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perfisInfo = $this->PerfisInfo->get($id, [
            'contain' => ['Perfis', 'PerfisUsers']
        ]);

        $this->set('perfisInfo', $perfisInfo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $perfisInfo = $this->PerfisInfo->newEntity();
        if ($this->request->is('post')) {
            $perfisInfo = $this->PerfisInfo->patchEntity($perfisInfo, $this->request->getData());
            if ($this->PerfisInfo->save($perfisInfo)) {
                $this->Flash->success(__('The perfis info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The perfis info could not be saved. Please, try again.'));
        }
        $perfis = $this->PerfisInfo->Perfis->find('list', ['limit' => 200]);
        $perfisUsers = $this->PerfisInfo->PerfisUsers->find('list', ['limit' => 200]);
        $this->set(compact('perfisInfo', 'perfis', 'perfisUsers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Perfis Info id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $perfisInfo = $this->PerfisInfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $perfisInfo = $this->PerfisInfo->patchEntity($perfisInfo, $this->request->getData());
            if ($this->PerfisInfo->save($perfisInfo)) {
                $this->Flash->success(__('The perfis info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The perfis info could not be saved. Please, try again.'));
        }
        $perfis = $this->PerfisInfo->Perfis->find('list', ['limit' => 200]);
        $perfisUsers = $this->PerfisInfo->PerfisUsers->find('list', ['limit' => 200]);
        $this->set(compact('perfisInfo', 'perfis', 'perfisUsers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Perfis Info id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perfisInfo = $this->PerfisInfo->get($id);
        if ($this->PerfisInfo->delete($perfisInfo)) {
            $this->Flash->success(__('The perfis info has been deleted.'));
        } else {
            $this->Flash->error(__('The perfis info could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
