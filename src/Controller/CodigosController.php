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
            'contain' => []
        ]);
        debug($codigo);
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
        $this->set(compact('codigo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Codigo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
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
        $this->set(compact('codigo'));
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
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function disponivel()
    {
        $query = $users->find()->contain('Codigo', function ($q) {
        return $q
            ->select(['nome', 'code_id'])
            ->where(['Codigo.ativacao' => true]);
        });
    }
    
    public function indisponivel()//method invocado a partir da pagina CodeDisponivel.
    {
        $query->matching('Codigos', function ($q) {
            $q->where(['Codigos.code' == "ITAFRO"]);
        });
        $this->set(compact($query));
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function ita()
    {
        $codigos = $this->Codigos;
        $query = $codigos->find('all', [
            'conditions' => ['Codigos.code LIKE' => '%ITAFRO_%'],
            'limit' => 200
        ]);

        $q = $this->paginate($query);

        debug($query);
        debug($q);

        $this->set($codigos, $q);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function med()
    {
        $codigos = $this->Codigos;
        $query = $codigos->find('all', [
            'conditions' => ['Codigos.code LIKE' => '%MedAfro_%'],
            'limit' => 900
        ]);

        $codigo = $this->paginate($query);

        debug($codigos);
        debug($query);
        debug($codigo);

        $this->set('codigo', $codigo);
    }

}
