<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SuperUsuariosAcoes Controller
 *
 * @property \App\Model\Table\SuperUsuariosAcoesTable $SuperUsuariosAcoes
 *
 * @method \App\Model\Entity\SuperUsuariosAco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SuperUsuariosAcoesController extends AppController
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
        $superUsuariosAcoes = $this->paginate($this->SuperUsuariosAcoes);

        $this->set(compact('superUsuariosAcoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Super Usuarios Aco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $superUsuariosAco = $this->SuperUsuariosAcoes->get($id, [
            'contain' => ['SuperUsuarios']
        ]);

        $this->set('superUsuariosAco', $superUsuariosAco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $superUsuariosAco = $this->SuperUsuariosAcoes->newEntity();
        if ($this->request->is('post')) {
            $superUsuariosAco = $this->SuperUsuariosAcoes->patchEntity($superUsuariosAco, $this->request->getData());
            if ($this->SuperUsuariosAcoes->save($superUsuariosAco)) {
                $this->Flash->success(__('The super usuarios aco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The super usuarios aco could not be saved. Please, try again.'));
        }
        $superUsuarios = $this->SuperUsuariosAcoes->SuperUsuarios->find('list', ['limit' => 200]);
        $this->set(compact('superUsuariosAco', 'superUsuarios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Super Usuarios Aco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $superUsuariosAco = $this->SuperUsuariosAcoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $superUsuariosAco = $this->SuperUsuariosAcoes->patchEntity($superUsuariosAco, $this->request->getData());
            if ($this->SuperUsuariosAcoes->save($superUsuariosAco)) {
                $this->Flash->success(__('The super usuarios aco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The super usuarios aco could not be saved. Please, try again.'));
        }
        $superUsuarios = $this->SuperUsuariosAcoes->SuperUsuarios->find('list', ['limit' => 200]);
        $this->set(compact('superUsuariosAco', 'superUsuarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Super Usuarios Aco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $superUsuariosAco = $this->SuperUsuariosAcoes->get($id);
        if ($this->SuperUsuariosAcoes->delete($superUsuariosAco)) {
            $this->Flash->success(__('The super usuarios aco has been deleted.'));
        } else {
            $this->Flash->error(__('The super usuarios aco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
