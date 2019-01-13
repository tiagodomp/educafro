<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Subtemas Controller
 *
 * @property \App\Model\Table\SubtemasTable $Subtemas
 *
 * @method \App\Model\Entity\Subtema[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubtemasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Temas', 'Docentes', 'Modificadores']
        ];
        $subtemas = $this->paginate($this->Subtemas);

        $this->set(compact('subtemas'));
    }

    /**
     * View method
     *
     * @param string|null $id Subtema id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subtema = $this->Subtemas->get($id, [
            'contain' => ['Temas', 'Docentes', 'Modificadores']
        ]);

        $this->set('subtema', $subtema);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subtema = $this->Subtemas->newEntity();
        if ($this->request->is('post')) {
            $subtema = $this->Subtemas->patchEntity($subtema, $this->request->getData());
            if ($this->Subtemas->save($subtema)) {
                $this->Flash->success(__('The subtema has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subtema could not be saved. Please, try again.'));
        }
        $temas = $this->Subtemas->Temas->find('list', ['limit' => 200]);
        $docentes = $this->Subtemas->Docentes->find('list', ['limit' => 200]);
        $modificadores = $this->Subtemas->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('subtema', 'temas', 'docentes', 'modificadores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Subtema id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subtema = $this->Subtemas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subtema = $this->Subtemas->patchEntity($subtema, $this->request->getData());
            if ($this->Subtemas->save($subtema)) {
                $this->Flash->success(__('The subtema has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subtema could not be saved. Please, try again.'));
        }
        $temas = $this->Subtemas->Temas->find('list', ['limit' => 200]);
        $docentes = $this->Subtemas->Docentes->find('list', ['limit' => 200]);
        $modificadores = $this->Subtemas->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('subtema', 'temas', 'docentes', 'modificadores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Subtema id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subtema = $this->Subtemas->get($id);
        if ($this->Subtemas->delete($subtema)) {
            $this->Flash->success(__('The subtema has been deleted.'));
        } else {
            $this->Flash->error(__('The subtema could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
