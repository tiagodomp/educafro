<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Temas Controller
 *
 * @property \App\Model\Table\TemasTable $Temas
 *
 * @method \App\Model\Entity\Tema[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TemasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Disciplinas', 'Modificadores']
        ];
        $temas = $this->paginate($this->Temas);

        $this->set(compact('temas'));
    }

    /**
     * View method
     *
     * @param string|null $id Tema id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tema = $this->Temas->get($id, [
            'contain' => ['Disciplinas', 'Modificadores']
        ]);

        $this->set('tema', $tema);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tema = $this->Temas->newEntity();
        if ($this->request->is('post')) {
            $tema = $this->Temas->patchEntity($tema, $this->request->getData());
            if ($this->Temas->save($tema)) {
                $this->Flash->success(__('The tema has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tema could not be saved. Please, try again.'));
        }
        $disciplinas = $this->Temas->Disciplinas->find('list', ['limit' => 200]);
        $modificadores = $this->Temas->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('tema', 'disciplinas', 'modificadores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tema id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tema = $this->Temas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tema = $this->Temas->patchEntity($tema, $this->request->getData());
            if ($this->Temas->save($tema)) {
                $this->Flash->success(__('The tema has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tema could not be saved. Please, try again.'));
        }
        $disciplinas = $this->Temas->Disciplinas->find('list', ['limit' => 200]);
        $modificadores = $this->Temas->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('tema', 'disciplinas', 'modificadores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tema id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tema = $this->Temas->get($id);
        if ($this->Temas->delete($tema)) {
            $this->Flash->success(__('The tema has been deleted.'));
        } else {
            $this->Flash->error(__('The tema could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
