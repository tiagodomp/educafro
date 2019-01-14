<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Outros Controller
 *
 * @property \App\Model\Table\OutrosTable $Outros
 *
 * @method \App\Model\Entity\Outro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OutrosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['User', 'Regras', 'Grupos']
        ];
        $outros = $this->paginate($this->Outros);

        $this->set(compact('outros'));
    }

    /**
     * View method
     *
     * @param string|null $id Outro id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $outro = $this->Outros->get($id, [
            'contain' => ['User', 'Regras', 'Grupos']
        ]);

        $this->set('outro', $outro);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $outro = $this->Outros->newEntity();
        if ($this->request->is('post')) {
            $outro = $this->Outros->patchEntity($outro, $this->request->getData());
            if ($this->Outros->save($outro)) {
                $this->Flash->success(__('The outro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The outro could not be saved. Please, try again.'));
        }
        $user = $this->Outros->User->find('list', ['limit' => 200]);
        $regras = $this->Outros->Regras->find('list', ['limit' => 200]);
        $grupos = $this->Outros->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('outro', 'user', 'regras', 'grupos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Outro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $outro = $this->Outros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $outro = $this->Outros->patchEntity($outro, $this->request->getData());
            if ($this->Outros->save($outro)) {
                $this->Flash->success(__('The outro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The outro could not be saved. Please, try again.'));
        }
        $user = $this->Outros->User->find('list', ['limit' => 200]);
        $regras = $this->Outros->Regras->find('list', ['limit' => 200]);
        $grupos = $this->Outros->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('outro', 'user', 'regras', 'grupos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Outro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $outro = $this->Outros->get($id);
        if ($this->Outros->delete($outro)) {
            $this->Flash->success(__('The outro has been deleted.'));
        } else {
            $this->Flash->error(__('The outro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
