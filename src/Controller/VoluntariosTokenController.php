<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VoluntariosToken Controller
 *
 * @property \App\Model\Table\VoluntariosTokenTable $VoluntariosToken
 *
 * @method \App\Model\Entity\VoluntariosToken[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VoluntariosTokenController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $voluntariosToken = $this->paginate($this->VoluntariosToken);

        $this->set(compact('voluntariosToken'));
    }

    /**
     * View method
     *
     * @param string|null $id Voluntarios Token id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $voluntariosToken = $this->VoluntariosToken->get($id, [
            'contain' => []
        ]);

        $this->set('voluntariosToken', $voluntariosToken);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $voluntariosToken = $this->VoluntariosToken->newEntity();
        if ($this->request->is('post')) {
            $voluntariosToken = $this->VoluntariosToken->patchEntity($voluntariosToken, $this->request->getData());
            if ($this->VoluntariosToken->save($voluntariosToken)) {
                $this->Flash->success(__('The voluntarios token has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The voluntarios token could not be saved. Please, try again.'));
        }
        $this->set(compact('voluntariosToken'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Voluntarios Token id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $voluntariosToken = $this->VoluntariosToken->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $voluntariosToken = $this->VoluntariosToken->patchEntity($voluntariosToken, $this->request->getData());
            if ($this->VoluntariosToken->save($voluntariosToken)) {
                $this->Flash->success(__('The voluntarios token has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The voluntarios token could not be saved. Please, try again.'));
        }
        $this->set(compact('voluntariosToken'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Voluntarios Token id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $voluntariosToken = $this->VoluntariosToken->get($id);
        if ($this->VoluntariosToken->delete($voluntariosToken)) {
            $this->Flash->success(__('The voluntarios token has been deleted.'));
        } else {
            $this->Flash->error(__('The voluntarios token could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
