<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Docentes Controller
 *
 * @property \App\Model\Table\DocentesTable $Docentes
 *
 * @method \App\Model\Entity\Docente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocentesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['User', 'Regras']
        ];
        $docentes = $this->paginate($this->Docentes);

        $this->set(compact('docentes'));
    }

    /**
     * View method
     *
     * @param string|null $id Docente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $docente = $this->Docentes->get($id, [
            'contain' => ['User', 'Regras']
        ]);

        $this->set('docente', $docente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $docente = $this->Docentes->newEntity();
        if ($this->request->is('post')) {
            $docente = $this->Docentes->patchEntity($docente, $this->request->getData());
            if ($this->Docentes->save($docente)) {
                $this->Flash->success(__('The docente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The docente could not be saved. Please, try again.'));
        }
        $user = $this->Docentes->User->find('list', ['limit' => 200]);
        $regras = $this->Docentes->Regras->find('list', ['limit' => 200]);
        $this->set(compact('docente', 'user', 'regras'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Docente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $docente = $this->Docentes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $docente = $this->Docentes->patchEntity($docente, $this->request->getData());
            if ($this->Docentes->save($docente)) {
                $this->Flash->success(__('The docente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The docente could not be saved. Please, try again.'));
        }
        $user = $this->Docentes->User->find('list', ['limit' => 200]);
        $regras = $this->Docentes->Regras->find('list', ['limit' => 200]);
        $this->set(compact('docente', 'user', 'regras'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Docente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $docente = $this->Docentes->get($id);
        if ($this->Docentes->delete($docente)) {
            $this->Flash->success(__('The docente has been deleted.'));
        } else {
            $this->Flash->error(__('The docente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
