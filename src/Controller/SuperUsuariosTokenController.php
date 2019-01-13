<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SuperUsuariosToken Controller
 *
 * @property \App\Model\Table\SuperUsuariosTokenTable $SuperUsuariosToken
 *
 * @method \App\Model\Entity\SuperUsuariosToken[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SuperUsuariosTokenController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SuperUsuarios']
        ];
        $superUsuariosToken = $this->paginate($this->SuperUsuariosToken);

        $this->set(compact('superUsuariosToken'));
    }

    /**
     * View method
     *
     * @param string|null $id Super Usuarios Token id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $superUsuariosToken = $this->SuperUsuariosToken->get($id, [
            'contain' => ['SuperUsuarios']
        ]);

        $this->set('superUsuariosToken', $superUsuariosToken);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $superUsuariosToken = $this->SuperUsuariosToken->newEntity();
        if ($this->request->is('post')) {
            $superUsuariosToken = $this->SuperUsuariosToken->patchEntity($superUsuariosToken, $this->request->getData());
            if ($this->SuperUsuariosToken->save($superUsuariosToken)) {
                $this->Flash->success(__('The super usuarios token has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The super usuarios token could not be saved. Please, try again.'));
        }
        $superUsuarios = $this->SuperUsuariosToken->SuperUsuarios->find('list', ['limit' => 200]);
        $this->set(compact('superUsuariosToken', 'superUsuarios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Super Usuarios Token id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $superUsuariosToken = $this->SuperUsuariosToken->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $superUsuariosToken = $this->SuperUsuariosToken->patchEntity($superUsuariosToken, $this->request->getData());
            if ($this->SuperUsuariosToken->save($superUsuariosToken)) {
                $this->Flash->success(__('The super usuarios token has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The super usuarios token could not be saved. Please, try again.'));
        }
        $superUsuarios = $this->SuperUsuariosToken->SuperUsuarios->find('list', ['limit' => 200]);
        $this->set(compact('superUsuariosToken', 'superUsuarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Super Usuarios Token id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $superUsuariosToken = $this->SuperUsuariosToken->get($id);
        if ($this->SuperUsuariosToken->delete($superUsuariosToken)) {
            $this->Flash->success(__('The super usuarios token has been deleted.'));
        } else {
            $this->Flash->error(__('The super usuarios token could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
