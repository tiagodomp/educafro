<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Administradores Controller
 *
 * @property \App\Model\Table\AdministradoresTable $Administradores
 *
 * @method \App\Model\Entity\Administradore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdministradoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Regras', 'User']
        ];
        $administradores = $this->paginate($this->Administradores);

        $this->set(compact('administradores'));
    }

    /**
     * View method
     *
     * @param string|null $id Administradore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $administradore = $this->Administradores->get($id, [
            'contain' => ['Regras', 'User']
        ]);

        $this->set('administradore', $administradore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $administradore = $this->Administradores->newEntity();
        if ($this->request->is('post')) {
            $administradore = $this->Administradores->patchEntity($administradore, $this->request->getData());
            if ($this->Administradores->save($administradore)) {
                $this->Flash->success(__('The administradore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administradore could not be saved. Please, try again.'));
        }
        $regras = $this->Administradores->Regras->find('list', ['limit' => 200]);
        $user = $this->Administradores->User->find('list', ['limit' => 200]);
        $this->set(compact('administradore', 'regras', 'user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Administradore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $administradore = $this->Administradores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $administradore = $this->Administradores->patchEntity($administradore, $this->request->getData());
            if ($this->Administradores->save($administradore)) {
                $this->Flash->success(__('The administradore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administradore could not be saved. Please, try again.'));
        }
        $regras = $this->Administradores->Regras->find('list', ['limit' => 200]);
        $user = $this->Administradores->User->find('list', ['limit' => 200]);
        $this->set(compact('administradore', 'regras', 'user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Administradore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $administradore = $this->Administradores->get($id);
        if ($this->Administradores->delete($administradore)) {
            $this->Flash->success(__('The administradore has been deleted.'));
        } else {
            $this->Flash->error(__('The administradore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
