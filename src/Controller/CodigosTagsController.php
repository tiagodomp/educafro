<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CodigosTags Controller
 *
 * @property \App\Model\Table\CodigosTagsTable $CodigosTags
 *
 * @method \App\Model\Entity\CodigosTag[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CodigosTagsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Modificadores']
        ];
        $codigosTags = $this->paginate($this->CodigosTags);

        $this->set(compact('codigosTags'));
    }

    /**
     * View method
     *
     * @param string|null $id Codigos Tag id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $codigosTag = $this->CodigosTags->get($id, [
            'contain' => ['Modificadores']
        ]);

        $this->set('codigosTag', $codigosTag);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $codigosTag = $this->CodigosTags->newEntity();
        if ($this->request->is('post')) {
            $codigosTag = $this->CodigosTags->patchEntity($codigosTag, $this->request->getData());
            if ($this->CodigosTags->save($codigosTag)) {
                $this->Flash->success(__('The codigos tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The codigos tag could not be saved. Please, try again.'));
        }
        $modificadores = $this->CodigosTags->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('codigosTag', 'modificadores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Codigos Tag id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $codigosTag = $this->CodigosTags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $codigosTag = $this->CodigosTags->patchEntity($codigosTag, $this->request->getData());
            if ($this->CodigosTags->save($codigosTag)) {
                $this->Flash->success(__('The codigos tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The codigos tag could not be saved. Please, try again.'));
        }
        $modificadores = $this->CodigosTags->Modificadores->find('list', ['limit' => 200]);
        $this->set(compact('codigosTag', 'modificadores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Codigos Tag id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $codigosTag = $this->CodigosTags->get($id);
        if ($this->CodigosTags->delete($codigosTag)) {
            $this->Flash->success(__('The codigos tag has been deleted.'));
        } else {
            $this->Flash->error(__('The codigos tag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
