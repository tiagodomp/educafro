<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Modificadores Controller
 *
 * @property \App\Model\Table\ModificadoresTable $Modificadores
 *
 * @method \App\Model\Entity\Modificadore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ModificadoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['UserHistoricoAcoes']
        ];
        $modificadores = $this->paginate($this->Modificadores);

        $this->set(compact('modificadores'));
    }

    /**
     * View method
     *
     * @param string|null $id Modificadore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $modificadore = $this->Modificadores->get($id, [
            'contain' => ['UserHistoricoAcoes']
        ]);

        $this->set('modificadore', $modificadore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $modificadore = $this->Modificadores->newEntity();
        if ($this->request->is('post')) {
            $modificadore = $this->Modificadores->patchEntity($modificadore, $this->request->getData());
            if ($this->Modificadores->save($modificadore)) {
                $this->Flash->success(__('The modificadore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The modificadore could not be saved. Please, try again.'));
        }
        $userHistoricoAcoes = $this->Modificadores->UserHistoricoAcoes->find('list', ['limit' => 200]);
        $this->set(compact('modificadore', 'userHistoricoAcoes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Modificadore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $modificadore = $this->Modificadores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modificadore = $this->Modificadores->patchEntity($modificadore, $this->request->getData());
            if ($this->Modificadores->save($modificadore)) {
                $this->Flash->success(__('The modificadore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The modificadore could not be saved. Please, try again.'));
        }
        $userHistoricoAcoes = $this->Modificadores->UserHistoricoAcoes->find('list', ['limit' => 200]);
        $this->set(compact('modificadore', 'userHistoricoAcoes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Modificadore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modificadore = $this->Modificadores->get($id);
        if ($this->Modificadores->delete($modificadore)) {
            $this->Flash->success(__('The modificadore has been deleted.'));
        } else {
            $this->Flash->error(__('The modificadore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
