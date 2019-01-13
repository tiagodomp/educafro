<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CodigosInfo Controller
 *
 * @property \App\Model\Table\CodigosInfoTable $CodigosInfo
 *
 * @method \App\Model\Entity\CodigosInfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CodigosInfoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Codigos', 'Modificadores']
        ];
        $codigosInfo = $this->paginate($this->CodigosInfo);

        $this->set(compact('codigosInfo'));
    }

    /**
     * View method
     *
     * @param string|null $id Codigos Info id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $codigosInfo = $this->CodigosInfo->get($id, [
            'contain' => ['Codigos', 'Modificadores']
        ]);

        $this->set('codigosInfo', $codigosInfo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $codigosInfo = $this->CodigosInfo->newEntity();
        if ($this->request->is('post')) {
            $codigosInfo = $this->CodigosInfo->patchEntity($codigosInfo, $this->request->getData());
            if ($this->CodigosInfo->save($codigosInfo)) {
                $this->Flash->success(__('The codigos info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The codigos info could not be saved. Please, try again.'));
        }
        $codigos = $this->CodigosInfo->Codigos->find('list', ['limit' => 200]);
        $modificadores = $this->CodigosInfo->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('codigosInfo', 'codigos', 'modificadores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Codigos Info id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $codigosInfo = $this->CodigosInfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $codigosInfo = $this->CodigosInfo->patchEntity($codigosInfo, $this->request->getData());
            if ($this->CodigosInfo->save($codigosInfo)) {
                $this->Flash->success(__('The codigos info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The codigos info could not be saved. Please, try again.'));
        }
        $codigos = $this->CodigosInfo->Codigos->find('list', ['limit' => 200]);
        $modificadores = $this->CodigosInfo->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('codigosInfo', 'codigos', 'modificadores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Codigos Info id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $codigosInfo = $this->CodigosInfo->get($id);
        if ($this->CodigosInfo->delete($codigosInfo)) {
            $this->Flash->success(__('The codigos info has been deleted.'));
        } else {
            $this->Flash->error(__('The codigos info could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
