<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Disciplinas Controller
 *
 * @property \App\Model\Table\DisciplinasTable $Disciplinas
 *
 * @method \App\Model\Entity\Disciplina[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DisciplinasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CursosModulos', 'Modificadores']
        ];
        $disciplinas = $this->paginate($this->Disciplinas);

        $this->set(compact('disciplinas'));
    }

    /**
     * View method
     *
     * @param string|null $id Disciplina id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $disciplina = $this->Disciplinas->get($id, [
            'contain' => ['CursosModulos', 'Modificadores']
        ]);

        $this->set('disciplina', $disciplina);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $disciplina = $this->Disciplinas->newEntity();
        if ($this->request->is('post')) {
            $disciplina = $this->Disciplinas->patchEntity($disciplina, $this->request->getData());
            if ($this->Disciplinas->save($disciplina)) {
                $this->Flash->success(__('The disciplina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disciplina could not be saved. Please, try again.'));
        }
        $cursosModulos = $this->Disciplinas->CursosModulos->find('list', ['limit' => 200]);
        $modificadores = $this->Disciplinas->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('disciplina', 'cursosModulos', 'modificadores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Disciplina id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $disciplina = $this->Disciplinas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $disciplina = $this->Disciplinas->patchEntity($disciplina, $this->request->getData());
            if ($this->Disciplinas->save($disciplina)) {
                $this->Flash->success(__('The disciplina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disciplina could not be saved. Please, try again.'));
        }
        $cursosModulos = $this->Disciplinas->CursosModulos->find('list', ['limit' => 200]);
        $modificadores = $this->Disciplinas->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('disciplina', 'cursosModulos', 'modificadores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Disciplina id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $disciplina = $this->Disciplinas->get($id);
        if ($this->Disciplinas->delete($disciplina)) {
            $this->Flash->success(__('The disciplina has been deleted.'));
        } else {
            $this->Flash->error(__('The disciplina could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
