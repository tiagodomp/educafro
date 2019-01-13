<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Voluntarios Controller
 *
 * @property \App\Model\Table\VoluntariosTable $Voluntarios
 *
 * @method \App\Model\Entity\Voluntario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VoluntariosController extends AppController
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
        $voluntarios = $this->paginate($this->Voluntarios);

        $this->set(compact('voluntarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Voluntario id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $voluntario = $this->Voluntarios->get($id, [
            'contain' => ['User', 'Regras']
        ]);

        $this->set('voluntario', $voluntario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $voluntario = $this->Voluntarios->newEntity();
        if ($this->request->is('post')) {
            $voluntario = $this->Voluntarios->patchEntity($voluntario, $this->request->getData());
            if ($this->Voluntarios->save($voluntario)) {
                $this->Flash->success(__('The voluntario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The voluntario could not be saved. Please, try again.'));
        }
        $user = $this->Voluntarios->User->find('list', ['limit' => 200]);
        $regras = $this->Voluntarios->Regras->find('list', ['limit' => 200]);
        $this->set(compact('voluntario', 'user', 'regras'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Voluntario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $voluntario = $this->Voluntarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $voluntario = $this->Voluntarios->patchEntity($voluntario, $this->request->getData());
            if ($this->Voluntarios->save($voluntario)) {
                $this->Flash->success(__('The voluntario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The voluntario could not be saved. Please, try again.'));
        }
        $user = $this->Voluntarios->User->find('list', ['limit' => 200]);
        $regras = $this->Voluntarios->Regras->find('list', ['limit' => 200]);
        $this->set(compact('voluntario', 'user', 'regras'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Voluntario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $voluntario = $this->Voluntarios->get($id);
        if ($this->Voluntarios->delete($voluntario)) {
            $this->Flash->success(__('The voluntario has been deleted.'));
        } else {
            $this->Flash->error(__('The voluntario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
