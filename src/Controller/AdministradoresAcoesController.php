<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdministradoresAcoes Controller
 *
 * @property \App\Model\Table\AdministradoresAcoesTable $AdministradoresAcoes
 *
 * @method \App\Model\Entity\AdministradoresAco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdministradoresAcoesController extends AppController
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
        $administradoresAcoes = $this->paginate($this->AdministradoresAcoes);

        $this->set(compact('administradoresAcoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Administradores Aco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $administradoresAco = $this->AdministradoresAcoes->get($id, [
            'contain' => ['Administradores']
        ]);

        $this->set('administradoresAco', $administradoresAco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $administradoresAco = $this->AdministradoresAcoes->newEntity();
        if ($this->request->is('post')) {
            $administradoresAco = $this->AdministradoresAcoes->patchEntity($administradoresAco, $this->request->getData());
            if ($this->AdministradoresAcoes->save($administradoresAco)) {
                $this->Flash->success(__('The administradores aco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administradores aco could not be saved. Please, try again.'));
        }
        $administradores = $this->AdministradoresAcoes->Administradores->find('list', ['limit' => 200]);
        $this->set(compact('administradoresAco', 'administradores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Administradores Aco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $administradoresAco = $this->AdministradoresAcoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $administradoresAco = $this->AdministradoresAcoes->patchEntity($administradoresAco, $this->request->getData());
            if ($this->AdministradoresAcoes->save($administradoresAco)) {
                $this->Flash->success(__('The administradores aco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administradores aco could not be saved. Please, try again.'));
        }
        $administradores = $this->AdministradoresAcoes->Administradores->find('list', ['limit' => 200]);
        $this->set(compact('administradoresAco', 'administradores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Administradores Aco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $administradoresAco = $this->AdministradoresAcoes->get($id);
        if ($this->AdministradoresAcoes->delete($administradoresAco)) {
            $this->Flash->success(__('The administradores aco has been deleted.'));
        } else {
            $this->Flash->error(__('The administradores aco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
