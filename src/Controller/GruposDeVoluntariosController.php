<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GruposDeVoluntarios Controller
 *
 * @property \App\Model\Table\GruposDeVoluntariosTable $GruposDeVoluntarios
 *
 * @method \App\Model\Entity\GruposDeVoluntario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GruposDeVoluntariosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grupos', 'Voluntarios']
        ];
        $gruposDeVoluntarios = $this->paginate($this->GruposDeVoluntarios);

        $this->set(compact('gruposDeVoluntarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Grupos De Voluntario id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gruposDeVoluntario = $this->GruposDeVoluntarios->get($id, [
            'contain' => ['Grupos', 'Voluntarios']
        ]);

        $this->set('gruposDeVoluntario', $gruposDeVoluntario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gruposDeVoluntario = $this->GruposDeVoluntarios->newEntity();
        if ($this->request->is('post')) {
            $gruposDeVoluntario = $this->GruposDeVoluntarios->patchEntity($gruposDeVoluntario, $this->request->getData());
            if ($this->GruposDeVoluntarios->save($gruposDeVoluntario)) {
                $this->Flash->success(__('The grupos de voluntario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos de voluntario could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposDeVoluntarios->Grupos->find('list', ['limit' => 200]);
        $voluntarios = $this->GruposDeVoluntarios->Voluntarios->find('list', ['limit' => 200]);
        $this->set(compact('gruposDeVoluntario', 'grupos', 'voluntarios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Grupos De Voluntario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gruposDeVoluntario = $this->GruposDeVoluntarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gruposDeVoluntario = $this->GruposDeVoluntarios->patchEntity($gruposDeVoluntario, $this->request->getData());
            if ($this->GruposDeVoluntarios->save($gruposDeVoluntario)) {
                $this->Flash->success(__('The grupos de voluntario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos de voluntario could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposDeVoluntarios->Grupos->find('list', ['limit' => 200]);
        $voluntarios = $this->GruposDeVoluntarios->Voluntarios->find('list', ['limit' => 200]);
        $this->set(compact('gruposDeVoluntario', 'grupos', 'voluntarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Grupos De Voluntario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gruposDeVoluntario = $this->GruposDeVoluntarios->get($id);
        if ($this->GruposDeVoluntarios->delete($gruposDeVoluntario)) {
            $this->Flash->success(__('The grupos de voluntario has been deleted.'));
        } else {
            $this->Flash->error(__('The grupos de voluntario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
