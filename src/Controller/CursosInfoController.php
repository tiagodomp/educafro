<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CursosInfo Controller
 *
 * @property \App\Model\Table\CursosInfoTable $CursosInfo
 *
 * @method \App\Model\Entity\CursosInfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CursosInfoController extends AppController
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
        $cursosInfo = $this->paginate($this->CursosInfo);

        $this->set(compact('cursosInfo'));
    }

    /**
     * View method
     *
     * @param string|null $id Cursos Info id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cursosInfo = $this->CursosInfo->get($id, [
            'contain' => ['Cursos']
        ]);

        $this->set('cursosInfo', $cursosInfo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cursosInfo = $this->CursosInfo->newEntity();
        if ($this->request->is('post')) {
            $cursosInfo = $this->CursosInfo->patchEntity($cursosInfo, $this->request->getData());
            if ($this->CursosInfo->save($cursosInfo)) {
                $this->Flash->success(__('The cursos info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cursos info could not be saved. Please, try again.'));
        }
        $cursos = $this->CursosInfo->Cursos->find('list', ['limit' => 200]);
        $this->set(compact('cursosInfo', 'cursos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cursos Info id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cursosInfo = $this->CursosInfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cursosInfo = $this->CursosInfo->patchEntity($cursosInfo, $this->request->getData());
            if ($this->CursosInfo->save($cursosInfo)) {
                $this->Flash->success(__('The cursos info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cursos info could not be saved. Please, try again.'));
        }
        $cursos = $this->CursosInfo->Cursos->find('list', ['limit' => 200]);
        $this->set(compact('cursosInfo', 'cursos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cursos Info id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cursosInfo = $this->CursosInfo->get($id);
        if ($this->CursosInfo->delete($cursosInfo)) {
            $this->Flash->success(__('The cursos info has been deleted.'));
        } else {
            $this->Flash->error(__('The cursos info could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
