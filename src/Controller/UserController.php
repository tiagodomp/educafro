<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\EventManager;
use Cake\I18n\Time;

/**
 * User Controller
 *
 * @property \App\Model\Table\UserTable $User
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserController extends AppController
{

    public function initialize()
    {

    }

    /**
     * @return \App\Model\Table\UserTable
     */
    public function login()
    {
        $this->paginate = [
            'contain' => ['UserCadastro', 'Perfis']
        ];
        $user = $this->paginate($this->User);

        $this->set(compact('user'));
    }

    /// Método UserPaginaInicial() retorna a pagina home que o Inquilino verá,
    /// redirecionando para criação de sessions, cookies e logs.
    public function UserPaginaInicial()
    {

        $dadosIdsIniciais = $this->User
            ->find('json')
            /// Verificar o comentário do campo 'info' tabela 'USER' no banco de dados, no qual especifica a estrutura do arquivo JSON
            ->jsonSelect([
                [
                    /// Retornara ['login'=> ['<AliasTabela>ID' => 'valorID']]
                    'login.perfisID' => 'info.SessionInitial.login.perfis_id@attributes',
                    'login.userHistoricoAcoesID' => 'info.SessionInitial.login.user_historico_acoes_id@attributes',
                    'login.userPreferenciasID' => 'info.SessionInitial.login.user_preferencias_id@attributes',
                    'login.userInfoID' => 'info.SessionInitial.login.user_info_id@attributes',
                    'login.regrasHistoricoAtribuicoesID' => 'info.SessionInitial.login.regras_historico_atribuicoes_id@attributes',
                    'login.perfisPreferenciasID' => 'info.SessionInitial.login.perfis_preferencias_id@attributes',
                    'login.gruposMembrosID' => 'info.SessionInitial.login.grupos_membros_id@attributes',
                ],
                'false'
            ])
            ->jsonWhere([
                'info.status.ativo@attributes' => true
            ])
           /*->jsonOrder([
                'created@attributes' => 'DESC'
            ])*/
            ->all();
        /*
        $query = $this->Users
            ->find('json', [
                'json.fields' => ['prefs.theme@attributes'],
                'json.conditions' => ['username@attributes' => 'user']),
                'json.sort' => ['created@attributes' => 'DESC']
            ->all();
        */

        //$perfisID = $this->Users->find('json')->jsonSelect(['perfis.id' => 'info.SessionInitial.login.perfis_id@attributes'], '.')->first()->toArray();
        // Retornara $perfisID = ['perfis.id' => 'ValorRetornado']]

        $this->set('dadosIdsIniciais', $dadosIdsIniciais);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['UserCadastro', 'Perfis']
        ];
        $user = $this->paginate($this->User);

        $this->set(compact('user'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->User->get($id, [
            'contain' => ['UserCadastro', 'Perfis']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->User->newEntity();
        if ($this->request->is('post')) {
            $user = $this->User->patchEntity($user, $this->request->getData());
            debug($user);
            if ($this->User->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $userCadastro = $this->User->UserCadastro->find('list', ['limit' => 200]);
        $perfis = $this->User->Perfis->find('list', ['limit' => 200]);
        $this->set(compact('user', 'userCadastro', 'perfis'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->User->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->User->patchEntity($user, $this->request->getData());
            if ($this->User->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $userCadastro = $this->User->UserCadastro->find('list', ['limit' => 200]);
        $perfis = $this->User->Perfis->find('list', ['limit' => 200]);
        $this->set(compact('user', 'userCadastro', 'perfis'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->User->get($id);
        if ($this->User->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
