<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GruposMembros Controller
 *
 * @property \App\Model\Table\GruposMembrosTable $GruposMembros
 *
 * @method \App\Model\Entity\GruposMembro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GruposMembrosController extends AppController
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
        $gruposMembros = $this->paginate($this->GruposMembros);

        $this->set(compact('gruposMembros'));
    }

    /**
     * View method
     *
     * @param string|null $id Grupos Membro id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gruposMembro = $this->GruposMembros->get($id, [
            'contain' => ['Grupos']
        ]);

        $this->set('gruposMembro', $gruposMembro);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gruposMembro = $this->GruposMembros->newEntity();
        if ($this->request->is('post')) {
            $gruposMembro = $this->GruposMembros->patchEntity($gruposMembro, $this->request->getData());
            if ($this->GruposMembros->save($gruposMembro)) {
                $this->Flash->success(__('The grupos membro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos membro could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposMembros->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('gruposMembro', 'grupos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Grupos Membro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gruposMembro = $this->GruposMembros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gruposMembro = $this->GruposMembros->patchEntity($gruposMembro, $this->request->getData());
            if ($this->GruposMembros->save($gruposMembro)) {
                $this->Flash->success(__('The grupos membro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos membro could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposMembros->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('gruposMembro', 'grupos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Grupos Membro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gruposMembro = $this->GruposMembros->get($id);
        if ($this->GruposMembros->delete($gruposMembro)) {
            $this->Flash->success(__('The grupos membro has been deleted.'));
        } else {
            $this->Flash->error(__('The grupos membro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
