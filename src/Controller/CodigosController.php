<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Codigos Controller
 *
 * @property \App\Model\Table\CodigosTable $Codigos
 *
 * @method \App\Model\Entity\Codigo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CodigosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CodigosTags']
        ];
        $codigos = $this->paginate($this->Codigos);

        $this->set(compact('codigos'));
    }

    /**
     * View method
     *
     * @param string|null $id Codigo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $codigo = $this->Codigos->get($id, [
            'contain' => ['CodigosTags']
        ]);

        $this->set('codigo', $codigo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $codigo = $this->Codigos->newEntity();
        if ($this->request->is('post')) {
            $codigo = $this->Codigos->patchEntity($codigo, $this->request->getData());
            if ($this->Codigos->save($codigo)) {
                $this->Flash->success(__('The codigo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The codigo could not be saved. Please, try again.'));
        }
        $codigosTags = $this->Codigos->CodigosTags->find('list', ['limit' => 200]);
        $this->set(compact('codigo', 'codigosTags'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Codigo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $codigo = $this->Codigos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $codigo = $this->Codigos->patchEntity($codigo, $this->request->getData());
            if ($this->Codigos->save($codigo)) {
                $this->Flash->success(__('The codigo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The codigo could not be saved. Please, try again.'));
        }
        $codigosTags = $this->Codigos->CodigosTags->find('list', ['limit' => 200]);
        $this->set(compact('codigo', 'codigosTags'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Codigo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $codigo = $this->Codigos->get($id);
        if ($this->Codigos->delete($codigo)) {
            $this->Flash->success(__('The codigo has been deleted.'));
        } else {
            $this->Flash->error(__('The codigo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
