<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false]);
        
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         * and https://book.cakephp.org/3.0/en/controllers/components/csrf.html
         */
        //$this->loadComponent('Csrf'); 
        //$this->loadComponent('Security');
        
        $this->loadComponent('Auth', [
            'authenticate' =>[
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login',
            ],
            
             //Use 
             // nos Controllers em caso de erro suba essa¬
             //linha 'authorize'=> 'Controller', 
            'authorize' => ['Controller'],
             // Se não for autorizado retorna a página anterior
            'unauthorizedRedirect' => $this->referer()
        ]);         
                 // inserir ação de salvar URL, e após efetuar o login ser redirecionado para página 
        
        // Permitir a ação de exibição para que o nosso controlador de páginas 
        // continue a funcionar. Ative também as ações somente leitura. 
        //$this->Auth->allow(['display', 'view', 'index']);
    }
    
    public function isAuthorized()
    {    
        $this->redirect(['controller'=>'Users', 'action'=>'redirecionar']);
            /*
            switch (is_numeric($user['roles_id'])){
                case null:
                    $action = $this->request->getParam('action');

                    // As ações permitidas para usuários com acesso público. 
                    if (in_array($action, [ 'login','registrar','cadastrar','validar','logout'])){return true;  
                    }else{return true;}
                    break;
                case 0:
                    $action = $this->request->getParam('action');
                    // As ações permitidas para usuários conectados como administrador. 
                    if (in_array($action, [ 'login', 'registrar', 'cadastrar', 'validar', 'logout' ])){return true;  
                    }else{ return false; }
                    break;
                case 1:
                    $action = $this->request->getParam('action');
                    // As ações permitidas para usuários conectados como administrador. 
                    if (in_array($action, [ 'index','view', 'add', 'edit', 'delete', 'codeativos', 'buscar', 'ita', 'med', 'disponivel', 'indisponivel'])){return true;  
                    }else{ return false; }
                    break;
                case 2:
                    $action = $this->request->getParam('action');
                    // As ações permitidas para usuários conectados como usuário privilegiado. 
                    if (in_array($action, [ 'index', 'view', 'add', 'codeativos', 'buscar', 'ita', 'med', 'disponivel', 'indisponivel'])){return true;  
                    }else{ return false; }
                    break;
                case 3:
                    $action = $this->request->getParam('action');
                    // As ações permitidas para usuários conectados como usuário privilegiado. 
                    if (in_array($action, [ 'principal', 'visualizar', 'adicionar', 'alterar', 'publicbuscar', 'perfil' ])){return true;  
                    }else{ return false; }
                    break;
                case 4:
                    $action = $this->request->getParam('action');
                    // As ações permitidas para usuários conectados como administrador. 
                    if (in_array($action, [ 'login', 'registrar', 'cadastrar', 'validar', 'logout' ])) {return true;  
                    }else{ return false;}
            }
             * 
             */
    } 
    
}
