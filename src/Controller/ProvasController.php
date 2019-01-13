<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Provas Controller
 *
 * @property \App\Model\Table\ProvasTable $Provas
 *
 * @method \App\Model\Entity\Prova[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProvasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Disciplinas', 'ProvasAnimas', 'Modificadores']
        ];
        $provas = $this->paginate($this->Provas);

        $this->set(compact('provas'));
    }

    /**
     * View method
     *
     * @param string|null $id Prova id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prova = $this->Provas->get($id, [
            'contain' => ['Disciplinas', 'ProvasAnimas', 'Modificadores']
        ]);

        $this->set('prova', $prova);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prova = $this->Provas->newEntity();
        if ($this->request->is('post')) {
            $prova = $this->Provas->patchEntity($prova, $this->request->getData());
            if ($this->Provas->save($prova)) {
                $this->Flash->success(__('The prova has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prova could not be saved. Please, try again.'));
        }
        $disciplinas = $this->Provas->Disciplinas->find('list', ['limit' => 200]);
        $provasAnimas = $this->Provas->ProvasAnimas->find('list', ['limit' => 200]);
        $modificadores = $this->Provas->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('prova', 'disciplinas', 'provasAnimas', 'modificadores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prova id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prova = $this->Provas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prova = $this->Provas->patchEntity($prova, $this->request->getData());
            if ($this->Provas->save($prova)) {
                $this->Flash->success(__('The prova has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prova could not be saved. Please, try again.'));
        }
        $disciplinas = $this->Provas->Disciplinas->find('list', ['limit' => 200]);
        $provasAnimas = $this->Provas->ProvasAnimas->find('list', ['limit' => 200]);
        $modificadores = $this->Provas->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('prova', 'disciplinas', 'provasAnimas', 'modificadores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prova id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prova = $this->Provas->get($id);
        if ($this->Provas->delete($prova)) {
            $this->Flash->success(__('The prova has been deleted.'));
        } else {
            $this->Flash->error(__('The prova could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
