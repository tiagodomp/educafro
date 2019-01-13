<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CursosHistorico Controller
 *
 * @property \App\Model\Table\CursosHistoricoTable $CursosHistorico
 *
 * @method \App\Model\Entity\CursosHistorico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CursosHistoricoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CursosSecoes', 'Log']
        ];
        $cursosHistorico = $this->paginate($this->CursosHistorico);

        $this->set(compact('cursosHistorico'));
    }

    /**
     * View method
     *
     * @param string|null $id Cursos Historico id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cursosHistorico = $this->CursosHistorico->get($id, [
            'contain' => ['CursosSecoes', 'Log']
        ]);

        $this->set('cursosHistorico', $cursosHistorico);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cursosHistorico = $this->CursosHistorico->newEntity();
        if ($this->request->is('post')) {
            $cursosHistorico = $this->CursosHistorico->patchEntity($cursosHistorico, $this->request->getData());
            if ($this->CursosHistorico->save($cursosHistorico)) {
                $this->Flash->success(__('The cursos historico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cursos historico could not be saved. Please, try again.'));
        }
        $cursosSecoes = $this->CursosHistorico->CursosSecoes->find('list', ['limit' => 200]);
        $log = $this->CursosHistorico->Log->find('list', ['limit' => 200]);
        $this->set(compact('cursosHistorico', 'cursosSecoes', 'log'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cursos Historico id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cursosHistorico = $this->CursosHistorico->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cursosHistorico = $this->CursosHistorico->patchEntity($cursosHistorico, $this->request->getData());
            if ($this->CursosHistorico->save($cursosHistorico)) {
                $this->Flash->success(__('The cursos historico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cursos historico could not be saved. Please, try again.'));
        }
        $cursosSecoes = $this->CursosHistorico->CursosSecoes->find('list', ['limit' => 200]);
        $log = $this->CursosHistorico->Log->find('list', ['limit' => 200]);
        $this->set(compact('cursosHistorico', 'cursosSecoes', 'log'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cursos Historico id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cursosHistorico = $this->CursosHistorico->get($id);
        if ($this->CursosHistorico->delete($cursosHistorico)) {
            $this->Flash->success(__('The cursos historico has been deleted.'));
        } else {
            $this->Flash->error(__('The cursos historico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
