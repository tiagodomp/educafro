<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Regras Controller
 *
 * @property \App\Model\Table\RegrasTable $Regras
 *
 * @method \App\Model\Entity\Regra[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RegrasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grupos', 'RegrasHierarquias', 'Modificadores']
        ];
        $regras = $this->paginate($this->Regras);

        $this->set(compact('regras'));
    }

    /**
     * View method
     *
     * @param string|null $id Regra id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $regra = $this->Regras->get($id, [
            'contain' => ['Grupos', 'RegrasHierarquias', 'Modificadores']
        ]);

        $this->set('regra', $regra);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $regra = $this->Regras->newEntity();
        if ($this->request->is('post')) {
            $regra = $this->Regras->patchEntity($regra, $this->request->getData());
            if ($this->Regras->save($regra)) {
                $this->Flash->success(__('The regra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The regra could not be saved. Please, try again.'));
        }
        $grupos = $this->Regras->Grupos->find('list', ['limit' => 200]);
        $regrasHierarquias = $this->Regras->RegrasHierarquias->find('list', ['limit' => 200]);
        $modificadores = $this->Regras->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('regra', 'grupos', 'regrasHierarquias', 'modificadores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Regra id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $regra = $this->Regras->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $regra = $this->Regras->patchEntity($regra, $this->request->getData());
            if ($this->Regras->save($regra)) {
                $this->Flash->success(__('The regra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The regra could not be saved. Please, try again.'));
        }
        $grupos = $this->Regras->Grupos->find('list', ['limit' => 200]);
        $regrasHierarquias = $this->Regras->RegrasHierarquias->find('list', ['limit' => 200]);
        $modificadores = $this->Regras->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('regra', 'grupos', 'regrasHierarquias', 'modificadores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Regra id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $regra = $this->Regras->get($id);
        if ($this->Regras->delete($regra)) {
            $this->Flash->success(__('The regra has been deleted.'));
        } else {
            $this->Flash->error(__('The regra could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
