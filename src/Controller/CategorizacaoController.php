<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Categorizacao Controller
 *
 * @property \App\Model\Table\CategorizacaoTable $Categorizacao
 *
 * @method \App\Model\Entity\Categorizacao[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategorizacaoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $categorizacao = $this->paginate($this->Categorizacao);

        $this->set(compact('categorizacao'));
    }

    /**
     * View method
     *
     * @param string|null $id Categorizacao id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categorizacao = $this->Categorizacao->get($id, [
            'contain' => ['CategorizacaoInfo', 'Eventos']
        ]);

        $this->set('categorizacao', $categorizacao);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categorizacao = $this->Categorizacao->newEntity();
        if ($this->request->is('post')) {
            $categorizacao = $this->Categorizacao->patchEntity($categorizacao, $this->request->getData());
            if ($this->Categorizacao->save($categorizacao)) {
                $this->Flash->success(__('The categorizacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorizacao could not be saved. Please, try again.'));
        }
        $this->set(compact('categorizacao'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorizacao id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categorizacao = $this->Categorizacao->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categorizacao = $this->Categorizacao->patchEntity($categorizacao, $this->request->getData());
            if ($this->Categorizacao->save($categorizacao)) {
                $this->Flash->success(__('The categorizacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorizacao could not be saved. Please, try again.'));
        }
        $this->set(compact('categorizacao'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorizacao id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categorizacao = $this->Categorizacao->get($id);
        if ($this->Categorizacao->delete($categorizacao)) {
            $this->Flash->success(__('The categorizacao has been deleted.'));
        } else {
            $this->Flash->error(__('The categorizacao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
