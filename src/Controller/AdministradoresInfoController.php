<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdministradoresInfo Controller
 *
 * @property \App\Model\Table\AdministradoresInfoTable $AdministradoresInfo
 *
 * @method \App\Model\Entity\AdministradoresInfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdministradoresInfoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $administradoresInfo = $this->paginate($this->AdministradoresInfo);

        $this->set(compact('administradoresInfo'));
    }

    /**
     * View method
     *
     * @param string|null $id Administradores Info id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $administradoresInfo = $this->AdministradoresInfo->get($id, [
            'contain' => []
        ]);

        $this->set('administradoresInfo', $administradoresInfo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $administradoresInfo = $this->AdministradoresInfo->newEntity();
        if ($this->request->is('post')) {
            $administradoresInfo = $this->AdministradoresInfo->patchEntity($administradoresInfo, $this->request->getData());
            if ($this->AdministradoresInfo->save($administradoresInfo)) {
                $this->Flash->success(__('The administradores info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administradores info could not be saved. Please, try again.'));
        }
        $this->set(compact('administradoresInfo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Administradores Info id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $administradoresInfo = $this->AdministradoresInfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $administradoresInfo = $this->AdministradoresInfo->patchEntity($administradoresInfo, $this->request->getData());
            if ($this->AdministradoresInfo->save($administradoresInfo)) {
                $this->Flash->success(__('The administradores info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administradores info could not be saved. Please, try again.'));
        }
        $this->set(compact('administradoresInfo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Administradores Info id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $administradoresInfo = $this->AdministradoresInfo->get($id);
        if ($this->AdministradoresInfo->delete($administradoresInfo)) {
            $this->Flash->success(__('The administradores info has been deleted.'));
        } else {
            $this->Flash->error(__('The administradores info could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
