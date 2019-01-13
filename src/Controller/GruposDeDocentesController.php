<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GruposDeDocentes Controller
 *
 * @property \App\Model\Table\GruposDeDocentesTable $GruposDeDocentes
 *
 * @method \App\Model\Entity\GruposDeDocente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GruposDeDocentesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grupos', 'Docentes']
        ];
        $gruposDeDocentes = $this->paginate($this->GruposDeDocentes);

        $this->set(compact('gruposDeDocentes'));
    }

    /**
     * View method
     *
     * @param string|null $id Grupos De Docente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gruposDeDocente = $this->GruposDeDocentes->get($id, [
            'contain' => ['Grupos', 'Docentes']
        ]);

        $this->set('gruposDeDocente', $gruposDeDocente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gruposDeDocente = $this->GruposDeDocentes->newEntity();
        if ($this->request->is('post')) {
            $gruposDeDocente = $this->GruposDeDocentes->patchEntity($gruposDeDocente, $this->request->getData());
            if ($this->GruposDeDocentes->save($gruposDeDocente)) {
                $this->Flash->success(__('The grupos de docente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos de docente could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposDeDocentes->Grupos->find('list', ['limit' => 200]);
        $docentes = $this->GruposDeDocentes->Docentes->find('list', ['limit' => 200]);
        $this->set(compact('gruposDeDocente', 'grupos', 'docentes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Grupos De Docente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gruposDeDocente = $this->GruposDeDocentes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gruposDeDocente = $this->GruposDeDocentes->patchEntity($gruposDeDocente, $this->request->getData());
            if ($this->GruposDeDocentes->save($gruposDeDocente)) {
                $this->Flash->success(__('The grupos de docente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupos de docente could not be saved. Please, try again.'));
        }
        $grupos = $this->GruposDeDocentes->Grupos->find('list', ['limit' => 200]);
        $docentes = $this->GruposDeDocentes->Docentes->find('list', ['limit' => 200]);
        $this->set(compact('gruposDeDocente', 'grupos', 'docentes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Grupos De Docente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gruposDeDocente = $this->GruposDeDocentes->get($id);
        if ($this->GruposDeDocentes->delete($gruposDeDocente)) {
            $this->Flash->success(__('The grupos de docente has been deleted.'));
        } else {
            $this->Flash->error(__('The grupos de docente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
