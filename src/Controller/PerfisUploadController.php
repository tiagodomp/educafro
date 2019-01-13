<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PerfisUpload Controller
 *
 * @property \App\Model\Table\PerfisUploadTable $PerfisUpload
 *
 * @method \App\Model\Entity\PerfisUpload[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PerfisUploadController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Perfis']
        ];
        $perfisUpload = $this->paginate($this->PerfisUpload);

        $this->set(compact('perfisUpload'));
    }

    /**
     * View method
     *
     * @param string|null $id Perfis Upload id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perfisUpload = $this->PerfisUpload->get($id, [
            'contain' => ['Perfis']
        ]);

        $this->set('perfisUpload', $perfisUpload);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $perfisUpload = $this->PerfisUpload->newEntity();
        if ($this->request->is('post')) {
            $perfisUpload = $this->PerfisUpload->patchEntity($perfisUpload, $this->request->getData());
            if ($this->PerfisUpload->save($perfisUpload)) {
                $this->Flash->success(__('The perfis upload has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The perfis upload could not be saved. Please, try again.'));
        }
        $perfis = $this->PerfisUpload->Perfis->find('list', ['limit' => 200]);
        $this->set(compact('perfisUpload', 'perfis'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Perfis Upload id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $perfisUpload = $this->PerfisUpload->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $perfisUpload = $this->PerfisUpload->patchEntity($perfisUpload, $this->request->getData());
            if ($this->PerfisUpload->save($perfisUpload)) {
                $this->Flash->success(__('The perfis upload has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The perfis upload could not be saved. Please, try again.'));
        }
        $perfis = $this->PerfisUpload->Perfis->find('list', ['limit' => 200]);
        $this->set(compact('perfisUpload', 'perfis'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Perfis Upload id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perfisUpload = $this->PerfisUpload->get($id);
        if ($this->PerfisUpload->delete($perfisUpload)) {
            $this->Flash->success(__('The perfis upload has been deleted.'));
        } else {
            $this->Flash->error(__('The perfis upload could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
