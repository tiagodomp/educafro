<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CursosModulos Controller
 *
 * @property \App\Model\Table\CursosModulosTable $CursosModulos
 *
 * @method \App\Model\Entity\CursosModulo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CursosModulosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cursos', 'Grupos']
        ];
        $cursosModulos = $this->paginate($this->CursosModulos);

        $this->set(compact('cursosModulos'));
    }

    /**
     * View method
     *
     * @param string|null $id Cursos Modulo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cursosModulo = $this->CursosModulos->get($id, [
            'contain' => ['Cursos', 'Grupos']
        ]);

        $this->set('cursosModulo', $cursosModulo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cursosModulo = $this->CursosModulos->newEntity();
        if ($this->request->is('post')) {
            $cursosModulo = $this->CursosModulos->patchEntity($cursosModulo, $this->request->getData());
            if ($this->CursosModulos->save($cursosModulo)) {
                $this->Flash->success(__('The cursos modulo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cursos modulo could not be saved. Please, try again.'));
        }
        $cursos = $this->CursosModulos->Cursos->find('list', ['limit' => 200]);
        $grupos = $this->CursosModulos->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('cursosModulo', 'cursos', 'grupos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cursos Modulo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cursosModulo = $this->CursosModulos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cursosModulo = $this->CursosModulos->patchEntity($cursosModulo, $this->request->getData());
            if ($this->CursosModulos->save($cursosModulo)) {
                $this->Flash->success(__('The cursos modulo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cursos modulo could not be saved. Please, try again.'));
        }
        $cursos = $this->CursosModulos->Cursos->find('list', ['limit' => 200]);
        $grupos = $this->CursosModulos->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('cursosModulo', 'cursos', 'grupos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cursos Modulo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cursosModulo = $this->CursosModulos->get($id);
        if ($this->CursosModulos->delete($cursosModulo)) {
            $this->Flash->success(__('The cursos modulo has been deleted.'));
        } else {
            $this->Flash->error(__('The cursos modulo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
