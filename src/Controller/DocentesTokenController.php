<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DocentesToken Controller
 *
 * @property \App\Model\Table\DocentesTokenTable $DocentesToken
 *
 * @method \App\Model\Entity\DocentesToken[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocentesTokenController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Docentes']
        ];
        $docentesToken = $this->paginate($this->DocentesToken);

        $this->set(compact('docentesToken'));
    }

    /**
     * View method
     *
     * @param string|null $id Docentes Token id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $docentesToken = $this->DocentesToken->get($id, [
            'contain' => ['Docentes']
        ]);

        $this->set('docentesToken', $docentesToken);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $docentesToken = $this->DocentesToken->newEntity();
        if ($this->request->is('post')) {
            $docentesToken = $this->DocentesToken->patchEntity($docentesToken, $this->request->getData());
            if ($this->DocentesToken->save($docentesToken)) {
                $this->Flash->success(__('The docentes token has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The docentes token could not be saved. Please, try again.'));
        }
        $docentes = $this->DocentesToken->Docentes->find('list', ['limit' => 200]);
        $this->set(compact('docentesToken', 'docentes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Docentes Token id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $docentesToken = $this->DocentesToken->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $docentesToken = $this->DocentesToken->patchEntity($docentesToken, $this->request->getData());
            if ($this->DocentesToken->save($docentesToken)) {
                $this->Flash->success(__('The docentes token has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The docentes token could not be saved. Please, try again.'));
        }
        $docentes = $this->DocentesToken->Docentes->find('list', ['limit' => 200]);
        $this->set(compact('docentesToken', 'docentes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Docentes Token id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $docentesToken = $this->DocentesToken->get($id);
        if ($this->DocentesToken->delete($docentesToken)) {
            $this->Flash->success(__('The docentes token has been deleted.'));
        } else {
            $this->Flash->error(__('The docentes token could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
