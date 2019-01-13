<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PerfisPreferencias Controller
 *
 * @property \App\Model\Table\PerfisPreferenciasTable $PerfisPreferencias
 *
 * @method \App\Model\Entity\PerfisPreferencia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PerfisPreferenciasController extends AppController
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
        $perfisPreferencias = $this->paginate($this->PerfisPreferencias);

        $this->set(compact('perfisPreferencias'));
    }

    /**
     * View method
     *
     * @param string|null $id Perfis Preferencia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perfisPreferencia = $this->PerfisPreferencias->get($id, [
            'contain' => ['Perfis', 'PerfisUsers']
        ]);

        $this->set('perfisPreferencia', $perfisPreferencia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $perfisPreferencia = $this->PerfisPreferencias->newEntity();
        if ($this->request->is('post')) {
            $perfisPreferencia = $this->PerfisPreferencias->patchEntity($perfisPreferencia, $this->request->getData());
            if ($this->PerfisPreferencias->save($perfisPreferencia)) {
                $this->Flash->success(__('The perfis preferencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The perfis preferencia could not be saved. Please, try again.'));
        }
        $perfis = $this->PerfisPreferencias->Perfis->find('list', ['limit' => 200]);
        $perfisUsers = $this->PerfisPreferencias->PerfisUsers->find('list', ['limit' => 200]);
        $this->set(compact('perfisPreferencia', 'perfis', 'perfisUsers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Perfis Preferencia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $perfisPreferencia = $this->PerfisPreferencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $perfisPreferencia = $this->PerfisPreferencias->patchEntity($perfisPreferencia, $this->request->getData());
            if ($this->PerfisPreferencias->save($perfisPreferencia)) {
                $this->Flash->success(__('The perfis preferencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The perfis preferencia could not be saved. Please, try again.'));
        }
        $perfis = $this->PerfisPreferencias->Perfis->find('list', ['limit' => 200]);
        $perfisUsers = $this->PerfisPreferencias->PerfisUsers->find('list', ['limit' => 200]);
        $this->set(compact('perfisPreferencia', 'perfis', 'perfisUsers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Perfis Preferencia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perfisPreferencia = $this->PerfisPreferencias->get($id);
        if ($this->PerfisPreferencias->delete($perfisPreferencia)) {
            $this->Flash->success(__('The perfis preferencia has been deleted.'));
        } else {
            $this->Flash->error(__('The perfis preferencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
