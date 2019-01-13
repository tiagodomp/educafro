<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Log Controller
 *
 * @property \App\Model\Table\LogTable $Log
 *
 * @method \App\Model\Entity\Log[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LogController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'MysqlLogs', 'Cursos', 'CursosModulos', 'Eventos']
        ];
        $log = $this->paginate($this->Log);

        $this->set(compact('log'));
    }

    /**
     * View method
     *
     * @param string|null $id Log id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $log = $this->Log->get($id, [
            'contain' => ['Users', 'MysqlLogs', 'Cursos', 'CursosModulos', 'Eventos', 'CursosHistorico', 'GruposHistorico', 'UserHistoricoAcoes']
        ]);

        $this->set('log', $log);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $log = $this->Log->newEntity();
        if ($this->request->is('post')) {
            $log = $this->Log->patchEntity($log, $this->request->getData());
            if ($this->Log->save($log)) {
                $this->Flash->success(__('The log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The log could not be saved. Please, try again.'));
        }
        $users = $this->Log->Users->find('list', ['limit' => 200]);
        $mysqlLogs = $this->Log->MysqlLogs->find('list', ['limit' => 200]);
        $cursos = $this->Log->Cursos->find('list', ['limit' => 200]);
        $cursosModulos = $this->Log->CursosModulos->find('list', ['limit' => 200]);
        $eventos = $this->Log->Eventos->find('list', ['limit' => 200]);
        $this->set(compact('log', 'users', 'mysqlLogs', 'cursos', 'cursosModulos', 'eventos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Log id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $log = $this->Log->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $log = $this->Log->patchEntity($log, $this->request->getData());
            if ($this->Log->save($log)) {
                $this->Flash->success(__('The log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The log could not be saved. Please, try again.'));
        }
        $users = $this->Log->Users->find('list', ['limit' => 200]);
        $mysqlLogs = $this->Log->MysqlLogs->find('list', ['limit' => 200]);
        $cursos = $this->Log->Cursos->find('list', ['limit' => 200]);
        $cursosModulos = $this->Log->CursosModulos->find('list', ['limit' => 200]);
        $eventos = $this->Log->Eventos->find('list', ['limit' => 200]);
        $this->set(compact('log', 'users', 'mysqlLogs', 'cursos', 'cursosModulos', 'eventos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Log id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $log = $this->Log->get($id);
        if ($this->Log->delete($log)) {
            $this->Flash->success(__('The log has been deleted.'));
        } else {
            $this->Flash->error(__('The log could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
