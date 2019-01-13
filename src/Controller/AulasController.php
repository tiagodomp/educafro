<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aulas Controller
 *
 * @property \App\Model\Table\AulasTable $Aulas
 *
 * @method \App\Model\Entity\Aula[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AulasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Subtemas']
        ];
        $aulas = $this->paginate($this->Aulas);

        $this->set(compact('aulas'));
    }

    /**
     * View method
     *
     * @param string|null $id Aula id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aula = $this->Aulas->get($id, [
            'contain' => ['Subtemas']
        ]);

        $this->set('aula', $aula);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aula = $this->Aulas->newEntity();
        if ($this->request->is('post')) {
            $aula = $this->Aulas->patchEntity($aula, $this->request->getData());
            if ($this->Aulas->save($aula)) {
                $this->Flash->success(__('The aula has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aula could not be saved. Please, try again.'));
        }
        $subtemas = $this->Aulas->Subtemas->find('list', ['limit' => 200]);
        $this->set(compact('aula', 'subtemas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aula id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aula = $this->Aulas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aula = $this->Aulas->patchEntity($aula, $this->request->getData());
            if ($this->Aulas->save($aula)) {
                $this->Flash->success(__('The aula has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aula could not be saved. Please, try again.'));
        }
        $subtemas = $this->Aulas->Subtemas->find('list', ['limit' => 200]);
        $this->set(compact('aula', 'subtemas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aula id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aula = $this->Aulas->get($id);
        if ($this->Aulas->delete($aula)) {
            $this->Flash->success(__('The aula has been deleted.'));
        } else {
            $this->Flash->error(__('The aula could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
