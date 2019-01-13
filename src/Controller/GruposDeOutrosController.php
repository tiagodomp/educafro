<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GruposDeOutros Controller
 *
 * @property \App\Model\Table\GruposDeOutrosTable $GruposDeOutros
 *
 * @method \App\Model\Entity\GruposDeOutro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GruposDeOutrosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grupos', 'Outros']
        ];
        $gruposDeOutros = $this->paginate($this->GruposDeOutros);

        $this->set(compact('gruposDeOutros'));
    }

    /**
     * View method
     *
     * @param string|null $id Grupos De Outro id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gruposDeOutro = $this->GruposDeOutros->get($id, [
            'contain' => ['Grupos', 'Outros']
        ]);

        $this->set('gruposDeOutro', $gruposDeOutro);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gruposDeOutro = $this->GruposDeOutros->newEntity();
        if ($this->request->is('post')) {
            $gruposDeOutro = $this->GruposDeOutros->patchEntity($gruposDeOutro, $this->request->getData());
            if ($this->GruposDeOutros->save($gruposDeOutro)) {
                $this->Flash->success(__('The grupos de outro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos de outro could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposDeOutros->Grupos->find('list', ['limit' => 200]);
        $outros = $this->GruposDeOutros->Outros->find('list', ['limit' => 200]);
        $this->set(compact('gruposDeOutro', 'grupos', 'outros'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Grupos De Outro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gruposDeOutro = $this->GruposDeOutros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gruposDeOutro = $this->GruposDeOutros->patchEntity($gruposDeOutro, $this->request->getData());
            if ($this->GruposDeOutros->save($gruposDeOutro)) {
                $this->Flash->success(__('The grupos de outro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos de outro could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposDeOutros->Grupos->find('list', ['limit' => 200]);
        $outros = $this->GruposDeOutros->Outros->find('list', ['limit' => 200]);
        $this->set(compact('gruposDeOutro', 'grupos', 'outros'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Grupos De Outro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gruposDeOutro = $this->GruposDeOutros->get($id);
        if ($this->GruposDeOutros->delete($gruposDeOutro)) {
            $this->Flash->success(__('The grupos de outro has been deleted.'));
        } else {
            $this->Flash->error(__('The grupos de outro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
