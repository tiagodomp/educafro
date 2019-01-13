<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CursosSecoes Controller
 *
 * @property \App\Model\Table\CursosSecoesTable $CursosSecoes
 *
 * @method \App\Model\Entity\CursosSeco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CursosSecoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cursos']
        ];
        $cursosSecoes = $this->paginate($this->CursosSecoes);

        $this->set(compact('cursosSecoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Cursos Seco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cursosSeco = $this->CursosSecoes->get($id, [
            'contain' => ['Cursos']
        ]);

        $this->set('cursosSeco', $cursosSeco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cursosSeco = $this->CursosSecoes->newEntity();
        if ($this->request->is('post')) {
            $cursosSeco = $this->CursosSecoes->patchEntity($cursosSeco, $this->request->getData());
            if ($this->CursosSecoes->save($cursosSeco)) {
                $this->Flash->success(__('The cursos seco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cursos seco could not be saved. Please, try again.'));
        }
        $cursos = $this->CursosSecoes->Cursos->find('list', ['limit' => 200]);
        $this->set(compact('cursosSeco', 'cursos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cursos Seco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cursosSeco = $this->CursosSecoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cursosSeco = $this->CursosSecoes->patchEntity($cursosSeco, $this->request->getData());
            if ($this->CursosSecoes->save($cursosSeco)) {
                $this->Flash->success(__('The cursos seco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cursos seco could not be saved. Please, try again.'));
        }
        $cursos = $this->CursosSecoes->Cursos->find('list', ['limit' => 200]);
        $this->set(compact('cursosSeco', 'cursos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cursos Seco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cursosSeco = $this->CursosSecoes->get($id);
        if ($this->CursosSecoes->delete($cursosSeco)) {
            $this->Flash->success(__('The cursos seco has been deleted.'));
        } else {
            $this->Flash->error(__('The cursos seco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
