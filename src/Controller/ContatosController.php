<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contatos Controller
 *
 * @property \App\Model\Table\ContatosTable $Contatos
 *
 * @method \App\Model\Entity\Contato[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContatosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Perfis']
        ];
        $contatos = $this->paginate($this->Contatos);

        $this->set(compact('contatos'));
    }

    /**
     * View method
     *
     * @param string|null $id Contato id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contato = $this->Contatos->get($id, [
            'contain' => ['Perfis']
        ]);

        $this->set('contato', $contato);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contato = $this->Contatos->newEntity();
        if ($this->request->is('post')) {
            $contato = $this->Contatos->patchEntity($contato, $this->request->getData());
            if ($this->Contatos->save($contato)) {
                $this->Flash->success(__('The contato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contato could not be saved. Please, try again.'));
        }
        $perfis = $this->Contatos->Perfis->find('list', ['limit' => 200]);
        $this->set(compact('contato', 'perfis'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contato id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contato = $this->Contatos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contato = $this->Contatos->patchEntity($contato, $this->request->getData());
            if ($this->Contatos->save($contato)) {
                $this->Flash->success(__('The contato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contato could not be saved. Please, try again.'));
        }
        $perfis = $this->Contatos->Perfis->find('list', ['limit' => 200]);
        $this->set(compact('contato', 'perfis'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contato id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contato = $this->Contatos->get($id);
        if ($this->Contatos->delete($contato)) {
            $this->Flash->success(__('The contato has been deleted.'));
        } else {
            $this->Flash->error(__('The contato could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
