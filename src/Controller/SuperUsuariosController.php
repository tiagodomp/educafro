<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SuperUsuarios Controller
 *
 * @property \App\Model\Table\SuperUsuariosTable $SuperUsuarios
 *
 * @method \App\Model\Entity\SuperUsuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SuperUsuariosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['User', 'Regras']
        ];
        $superUsuarios = $this->paginate($this->SuperUsuarios);

        $this->set(compact('superUsuarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Super Usuario id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $superUsuario = $this->SuperUsuarios->get($id, [
            'contain' => ['User', 'Regras']
        ]);

        $this->set('superUsuario', $superUsuario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $superUsuario = $this->SuperUsuarios->newEntity();
        if ($this->request->is('post')) {
            $superUsuario = $this->SuperUsuarios->patchEntity($superUsuario, $this->request->getData());
            if ($this->SuperUsuarios->save($superUsuario)) {
                $this->Flash->success(__('The super usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The super usuario could not be saved. Please, try again.'));
        }
        $user = $this->SuperUsuarios->User->find('list', ['limit' => 200]);
        $regras = $this->SuperUsuarios->Regras->find('list', ['limit' => 200]);
        $this->set(compact('superUsuario', 'user', 'regras'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Super Usuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $superUsuario = $this->SuperUsuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $superUsuario = $this->SuperUsuarios->patchEntity($superUsuario, $this->request->getData());
            if ($this->SuperUsuarios->save($superUsuario)) {
                $this->Flash->success(__('The super usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The super usuario could not be saved. Please, try again.'));
        }
        $user = $this->SuperUsuarios->User->find('list', ['limit' => 200]);
        $regras = $this->SuperUsuarios->Regras->find('list', ['limit' => 200]);
        $this->set(compact('superUsuario', 'user', 'regras'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Super Usuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $superUsuario = $this->SuperUsuarios->get($id);
        if ($this->SuperUsuarios->delete($superUsuario)) {
            $this->Flash->success(__('The super usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The super usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
