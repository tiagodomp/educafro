<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GruposDeAdministradores Controller
 *
 * @property \App\Model\Table\GruposDeAdministradoresTable $GruposDeAdministradores
 *
 * @method \App\Model\Entity\GruposDeAdministradore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GruposDeAdministradoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grupos', 'Administradores']
        ];
        $gruposDeAdministradores = $this->paginate($this->GruposDeAdministradores);

        $this->set(compact('gruposDeAdministradores'));
    }

    /**
     * View method
     *
     * @param string|null $id Grupos De Administradore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gruposDeAdministradore = $this->GruposDeAdministradores->get($id, [
            'contain' => ['Grupos', 'Administradores']
        ]);

        $this->set('gruposDeAdministradore', $gruposDeAdministradore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gruposDeAdministradore = $this->GruposDeAdministradores->newEntity();
        if ($this->request->is('post')) {
            $gruposDeAdministradore = $this->GruposDeAdministradores->patchEntity($gruposDeAdministradore, $this->request->getData());
            if ($this->GruposDeAdministradores->save($gruposDeAdministradore)) {
                $this->Flash->success(__('The grupos de administradore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos de administradore could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposDeAdministradores->Grupos->find('list', ['limit' => 200]);
        $administradores = $this->GruposDeAdministradores->Administradores->find('list', ['limit' => 200]);
        $this->set(compact('gruposDeAdministradore', 'grupos', 'administradores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Grupos De Administradore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gruposDeAdministradore = $this->GruposDeAdministradores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gruposDeAdministradore = $this->GruposDeAdministradores->patchEntity($gruposDeAdministradore, $this->request->getData());
            if ($this->GruposDeAdministradores->save($gruposDeAdministradore)) {
                $this->Flash->success(__('The grupos de administradore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos de administradore could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposDeAdministradores->Grupos->find('list', ['limit' => 200]);
        $administradores = $this->GruposDeAdministradores->Administradores->find('list', ['limit' => 200]);
        $this->set(compact('gruposDeAdministradore', 'grupos', 'administradores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Grupos De Administradore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gruposDeAdministradore = $this->GruposDeAdministradores->get($id);
        if ($this->GruposDeAdministradores->delete($gruposDeAdministradore)) {
            $this->Flash->success(__('The grupos de administradore has been deleted.'));
        } else {
            $this->Flash->error(__('The grupos de administradore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
