<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GruposSecoes Controller
 *
 * @property \App\Model\Table\GruposSecoesTable $GruposSecoes
 *
 * @method \App\Model\Entity\GruposSeco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GruposSecoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grupos']
        ];
        $gruposSecoes = $this->paginate($this->GruposSecoes);

        $this->set(compact('gruposSecoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Grupos Seco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gruposSeco = $this->GruposSecoes->get($id, [
            'contain' => ['Grupos']
        ]);

        $this->set('gruposSeco', $gruposSeco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gruposSeco = $this->GruposSecoes->newEntity();
        if ($this->request->is('post')) {
            $gruposSeco = $this->GruposSecoes->patchEntity($gruposSeco, $this->request->getData());
            if ($this->GruposSecoes->save($gruposSeco)) {
                $this->Flash->success(__('The grupos seco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos seco could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposSecoes->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('gruposSeco', 'grupos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Grupos Seco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gruposSeco = $this->GruposSecoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gruposSeco = $this->GruposSecoes->patchEntity($gruposSeco, $this->request->getData());
            if ($this->GruposSecoes->save($gruposSeco)) {
                $this->Flash->success(__('The grupos seco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos seco could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposSecoes->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('gruposSeco', 'grupos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Grupos Seco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gruposSeco = $this->GruposSecoes->get($id);
        if ($this->GruposSecoes->delete($gruposSeco)) {
            $this->Flash->success(__('The grupos seco has been deleted.'));
        } else {
            $this->Flash->error(__('The grupos seco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
