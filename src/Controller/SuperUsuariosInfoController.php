<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SuperUsuariosInfo Controller
 *
 * @property \App\Model\Table\SuperUsuariosInfoTable $SuperUsuariosInfo
 *
 * @method \App\Model\Entity\SuperUsuariosInfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SuperUsuariosInfoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $superUsuariosInfo = $this->paginate($this->SuperUsuariosInfo);

        $this->set(compact('superUsuariosInfo'));
    }

    /**
     * View method
     *
     * @param string|null $id Super Usuarios Info id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $superUsuariosInfo = $this->SuperUsuariosInfo->get($id, [
            'contain' => []
        ]);

        $this->set('superUsuariosInfo', $superUsuariosInfo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $superUsuariosInfo = $this->SuperUsuariosInfo->newEntity();
        if ($this->request->is('post')) {
            $superUsuariosInfo = $this->SuperUsuariosInfo->patchEntity($superUsuariosInfo, $this->request->getData());
            if ($this->SuperUsuariosInfo->save($superUsuariosInfo)) {
                $this->Flash->success(__('The super usuarios info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The super usuarios info could not be saved. Please, try again.'));
        }
        $this->set(compact('superUsuariosInfo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Super Usuarios Info id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $superUsuariosInfo = $this->SuperUsuariosInfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $superUsuariosInfo = $this->SuperUsuariosInfo->patchEntity($superUsuariosInfo, $this->request->getData());
            if ($this->SuperUsuariosInfo->save($superUsuariosInfo)) {
                $this->Flash->success(__('The super usuarios info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The super usuarios info could not be saved. Please, try again.'));
        }
        $this->set(compact('superUsuariosInfo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Super Usuarios Info id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $superUsuariosInfo = $this->SuperUsuariosInfo->get($id);
        if ($this->SuperUsuariosInfo->delete($superUsuariosInfo)) {
            $this->Flash->success(__('The super usuarios info has been deleted.'));
        } else {
            $this->Flash->error(__('The super usuarios info could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
