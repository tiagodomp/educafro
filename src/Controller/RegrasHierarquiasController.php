<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RegrasHierarquias Controller
 *
 * @property \App\Model\Table\RegrasHierarquiasTable $RegrasHierarquias
 *
 * @method \App\Model\Entity\RegrasHierarquia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RegrasHierarquiasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['RegrasPermicaoCrud', 'Modificadores']
        ];
        $regrasHierarquias = $this->paginate($this->RegrasHierarquias);

        $this->set(compact('regrasHierarquias'));
    }

    /**
     * View method
     *
     * @param string|null $id Regras Hierarquia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $regrasHierarquia = $this->RegrasHierarquias->get($id, [
            'contain' => ['RegrasPermicaoCrud', 'Modificadores']
        ]);

        $this->set('regrasHierarquia', $regrasHierarquia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $regrasHierarquia = $this->RegrasHierarquias->newEntity();
        if ($this->request->is('post')) {
            $regrasHierarquia = $this->RegrasHierarquias->patchEntity($regrasHierarquia, $this->request->getData());
            if ($this->RegrasHierarquias->save($regrasHierarquia)) {
                $this->Flash->success(__('The regras hierarquia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The regras hierarquia could not be saved. Please, try again.'));
        }
        $regrasPermicaoCrud = $this->RegrasHierarquias->RegrasPermicaoCrud->find('list', ['limit' => 200]);
        $modificadores = $this->RegrasHierarquias->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('regrasHierarquia', 'regrasPermicaoCrud', 'modificadores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Regras Hierarquia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $regrasHierarquia = $this->RegrasHierarquias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $regrasHierarquia = $this->RegrasHierarquias->patchEntity($regrasHierarquia, $this->request->getData());
            if ($this->RegrasHierarquias->save($regrasHierarquia)) {
                $this->Flash->success(__('The regras hierarquia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The regras hierarquia could not be saved. Please, try again.'));
        }
        $regrasPermicaoCrud = $this->RegrasHierarquias->RegrasPermicaoCrud->find('list', ['limit' => 200]);
        $modificadores = $this->RegrasHierarquias->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('regrasHierarquia', 'regrasPermicaoCrud', 'modificadores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Regras Hierarquia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $regrasHierarquia = $this->RegrasHierarquias->get($id);
        if ($this->RegrasHierarquias->delete($regrasHierarquia)) {
            $this->Flash->success(__('The regras hierarquia has been deleted.'));
        } else {
            $this->Flash->error(__('The regras hierarquia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
