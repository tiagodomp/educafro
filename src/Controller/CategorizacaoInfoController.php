<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategorizacaoInfo Controller
 *
 * @property \App\Model\Table\CategorizacaoInfoTable $CategorizacaoInfo
 *
 * @method \App\Model\Entity\CategorizacaoInfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategorizacaoInfoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categorizacao']
        ];
        $categorizacaoInfo = $this->paginate($this->CategorizacaoInfo);

        $this->set(compact('categorizacaoInfo'));
    }

    /**
     * View method
     *
     * @param string|null $id Categorizacao Info id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categorizacaoInfo = $this->CategorizacaoInfo->get($id, [
            'contain' => ['Categorizacao']
        ]);

        $this->set('categorizacaoInfo', $categorizacaoInfo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categorizacaoInfo = $this->CategorizacaoInfo->newEntity();
        if ($this->request->is('post')) {
            $categorizacaoInfo = $this->CategorizacaoInfo->patchEntity($categorizacaoInfo, $this->request->getData());
            if ($this->CategorizacaoInfo->save($categorizacaoInfo)) {
                $this->Flash->success(__('The categorizacao info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorizacao info could not be saved. Please, try again.'));
        }
        $categorizacao = $this->CategorizacaoInfo->Categorizacao->find('list', ['limit' => 200]);
        $this->set(compact('categorizacaoInfo', 'categorizacao'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorizacao Info id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categorizacaoInfo = $this->CategorizacaoInfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categorizacaoInfo = $this->CategorizacaoInfo->patchEntity($categorizacaoInfo, $this->request->getData());
            if ($this->CategorizacaoInfo->save($categorizacaoInfo)) {
                $this->Flash->success(__('The categorizacao info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorizacao info could not be saved. Please, try again.'));
        }
        $categorizacao = $this->CategorizacaoInfo->Categorizacao->find('list', ['limit' => 200]);
        $this->set(compact('categorizacaoInfo', 'categorizacao'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorizacao Info id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categorizacaoInfo = $this->CategorizacaoInfo->get($id);
        if ($this->CategorizacaoInfo->delete($categorizacaoInfo)) {
            $this->Flash->success(__('The categorizacao info has been deleted.'));
        } else {
            $this->Flash->error(__('The categorizacao info could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
