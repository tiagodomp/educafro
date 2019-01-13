<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RegrasPermicaoCrud Controller
 *
 * @property \App\Model\Table\RegrasPermicaoCrudTable $RegrasPermicaoCrud
 *
 * @method \App\Model\Entity\RegrasPermicaoCrud[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RegrasPermicaoCrudController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $regrasPermicaoCrud = $this->paginate($this->RegrasPermicaoCrud);

        $this->set(compact('regrasPermicaoCrud'));
    }

    /**
     * View method
     *
     * @param string|null $id Regras Permicao Crud id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $regrasPermicaoCrud = $this->RegrasPermicaoCrud->get($id, [
            'contain' => ['RegrasHierarquias']
        ]);

        $this->set('regrasPermicaoCrud', $regrasPermicaoCrud);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $regrasPermicaoCrud = $this->RegrasPermicaoCrud->newEntity();
        if ($this->request->is('post')) {
            $regrasPermicaoCrud = $this->RegrasPermicaoCrud->patchEntity($regrasPermicaoCrud, $this->request->getData());
            if ($this->RegrasPermicaoCrud->save($regrasPermicaoCrud)) {
                $this->Flash->success(__('The regras permicao crud has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The regras permicao crud could not be saved. Please, try again.'));
        }
        $this->set(compact('regrasPermicaoCrud'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Regras Permicao Crud id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $regrasPermicaoCrud = $this->RegrasPermicaoCrud->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $regrasPermicaoCrud = $this->RegrasPermicaoCrud->patchEntity($regrasPermicaoCrud, $this->request->getData());
            if ($this->RegrasPermicaoCrud->save($regrasPermicaoCrud)) {
                $this->Flash->success(__('The regras permicao crud has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The regras permicao crud could not be saved. Please, try again.'));
        }
        $this->set(compact('regrasPermicaoCrud'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Regras Permicao Crud id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $regrasPermicaoCrud = $this->RegrasPermicaoCrud->get($id);
        if ($this->RegrasPermicaoCrud->delete($regrasPermicaoCrud)) {
            $this->Flash->success(__('The regras permicao crud has been deleted.'));
        } else {
            $this->Flash->error(__('The regras permicao crud could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
