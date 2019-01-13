<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RegrasHistoricoAtribuicoes Controller
 *
 * @property \App\Model\Table\RegrasHistoricoAtribuicoesTable $RegrasHistoricoAtribuicoes
 *
 * @method \App\Model\Entity\RegrasHistoricoAtribuico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RegrasHistoricoAtribuicoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['UserAtribuicoes']
        ];
        $regrasHistoricoAtribuicoes = $this->paginate($this->RegrasHistoricoAtribuicoes);

        $this->set(compact('regrasHistoricoAtribuicoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Regras Historico Atribuico id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $regrasHistoricoAtribuico = $this->RegrasHistoricoAtribuicoes->get($id, [
            'contain' => ['UserAtribuicoes']
        ]);

        $this->set('regrasHistoricoAtribuico', $regrasHistoricoAtribuico);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $regrasHistoricoAtribuico = $this->RegrasHistoricoAtribuicoes->newEntity();
        if ($this->request->is('post')) {
            $regrasHistoricoAtribuico = $this->RegrasHistoricoAtribuicoes->patchEntity($regrasHistoricoAtribuico, $this->request->getData());
            if ($this->RegrasHistoricoAtribuicoes->save($regrasHistoricoAtribuico)) {
                $this->Flash->success(__('The regras historico atribuico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The regras historico atribuico could not be saved. Please, try again.'));
        }
        $userAtribuicoes = $this->RegrasHistoricoAtribuicoes->UserAtribuicoes->find('list', ['limit' => 200]);
        $this->set(compact('regrasHistoricoAtribuico', 'userAtribuicoes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Regras Historico Atribuico id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $regrasHistoricoAtribuico = $this->RegrasHistoricoAtribuicoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $regrasHistoricoAtribuico = $this->RegrasHistoricoAtribuicoes->patchEntity($regrasHistoricoAtribuico, $this->request->getData());
            if ($this->RegrasHistoricoAtribuicoes->save($regrasHistoricoAtribuico)) {
                $this->Flash->success(__('The regras historico atribuico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The regras historico atribuico could not be saved. Please, try again.'));
        }
        $userAtribuicoes = $this->RegrasHistoricoAtribuicoes->UserAtribuicoes->find('list', ['limit' => 200]);
        $this->set(compact('regrasHistoricoAtribuico', 'userAtribuicoes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Regras Historico Atribuico id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $regrasHistoricoAtribuico = $this->RegrasHistoricoAtribuicoes->get($id);
        if ($this->RegrasHistoricoAtribuicoes->delete($regrasHistoricoAtribuico)) {
            $this->Flash->success(__('The regras historico atribuico has been deleted.'));
        } else {
            $this->Flash->error(__('The regras historico atribuico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
