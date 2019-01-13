<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Perfis Controller
 *
 * @property \App\Model\Table\PerfisTable $Perfis
 *
 * @method \App\Model\Entity\Perfi[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PerfisController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $perfis = $this->paginate($this->Perfis);

        $this->set(compact('perfis'));
    }

    /**
     * View method
     *
     * @param string|null $id Perfi id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perfi = $this->Perfis->get($id, [
            'contain' => []
        ]);

        $this->set('perfi', $perfi);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $perfi = $this->Perfis->newEntity();
        if ($this->request->is('post')) {
            $perfi = $this->Perfis->patchEntity($perfi, $this->request->getData());
            if ($this->Perfis->save($perfi)) {
                $this->Flash->success(__('The perfi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The perfi could not be saved. Please, try again.'));
        }
        $this->set(compact('perfi'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Perfi id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $perfi = $this->Perfis->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $perfi = $this->Perfis->patchEntity($perfi, $this->request->getData());
            if ($this->Perfis->save($perfi)) {
                $this->Flash->success(__('The perfi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The perfi could not be saved. Please, try again.'));
        }
        $this->set(compact('perfi'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Perfi id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perfi = $this->Perfis->get($id);
        if ($this->Perfis->delete($perfi)) {
            $this->Flash->success(__('The perfi has been deleted.'));
        } else {
            $this->Flash->error(__('The perfi could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
