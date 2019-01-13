<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GruposDeSuperUsuarios Controller
 *
 * @property \App\Model\Table\GruposDeSuperUsuariosTable $GruposDeSuperUsuarios
 *
 * @method \App\Model\Entity\GruposDeSuperUsuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GruposDeSuperUsuariosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grupos', 'SuperUsuarios']
        ];
        $gruposDeSuperUsuarios = $this->paginate($this->GruposDeSuperUsuarios);

        $this->set(compact('gruposDeSuperUsuarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Grupos De Super Usuario id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gruposDeSuperUsuario = $this->GruposDeSuperUsuarios->get($id, [
            'contain' => ['Grupos', 'SuperUsuarios']
        ]);

        $this->set('gruposDeSuperUsuario', $gruposDeSuperUsuario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gruposDeSuperUsuario = $this->GruposDeSuperUsuarios->newEntity();
        if ($this->request->is('post')) {
            $gruposDeSuperUsuario = $this->GruposDeSuperUsuarios->patchEntity($gruposDeSuperUsuario, $this->request->getData());
            if ($this->GruposDeSuperUsuarios->save($gruposDeSuperUsuario)) {
                $this->Flash->success(__('The grupos de super usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos de super usuario could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposDeSuperUsuarios->Grupos->find('list', ['limit' => 200]);
        $superUsuarios = $this->GruposDeSuperUsuarios->SuperUsuarios->find('list', ['limit' => 200]);
        $this->set(compact('gruposDeSuperUsuario', 'grupos', 'superUsuarios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Grupos De Super Usuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gruposDeSuperUsuario = $this->GruposDeSuperUsuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gruposDeSuperUsuario = $this->GruposDeSuperUsuarios->patchEntity($gruposDeSuperUsuario, $this->request->getData());
            if ($this->GruposDeSuperUsuarios->save($gruposDeSuperUsuario)) {
                $this->Flash->success(__('The grupos de super usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos de super usuario could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposDeSuperUsuarios->Grupos->find('list', ['limit' => 200]);
        $superUsuarios = $this->GruposDeSuperUsuarios->SuperUsuarios->find('list', ['limit' => 200]);
        $this->set(compact('gruposDeSuperUsuario', 'grupos', 'superUsuarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Grupos De Super Usuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gruposDeSuperUsuario = $this->GruposDeSuperUsuarios->get($id);
        if ($this->GruposDeSuperUsuarios->delete($gruposDeSuperUsuario)) {
            $this->Flash->success(__('The grupos de super usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The grupos de super usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
