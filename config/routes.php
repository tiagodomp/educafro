<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 * Cache: Routes are cached to improve performance, check the RoutingMiddleware
 * constructor in your `src/Application.php` file to change this behavior.
 *
 */
Router::defaultRouteClass(DashedRoute::class);
    
Router::scope('/', function (RouteBuilder $routes) {    
    
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    $routes->connect('/', ['controller' => 'Users', 'action' => 'login']);

    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);
    
    
    //Autenticação
    $routes->connect('/login/*', ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/logout/', ['controller' => 'Users', 'action' => 'logout']);
    $routes->connect('/cadastrar/dados/*', ['controller' => 'Cadastros', 'action' => 'associarDados']);
    $routes->connect('/cadastrar/cadastro/*', ['controller' => 'Cadastros', 'action' => 'cadastro']);
    $routes->connect('/cadastrar/edit/*', ['controller' => 'Cadastros', 'action' => 'edit']);
    $routes->connect('/registrar/*', ['controller' => 'Registros', 'action' => 'registro']);
    $routes->connect('/v/*', ['controller' => 'Validar', 'action' => 'validar']);
    $routes->connect('/#/*', ['controller' => 'Users', 'action' => 'buscar']);
    
    
    
    //USUÁRIOS
    $routes->connect('/usuarios/*', ['controller' => 'Users', 'action' => 'index']);
    $routes->connect('/usuarios/add/*', ['controller' => 'Users', 'action' => 'add']);
    $routes->connect('/usuarios/editar/*', ['controller' => 'Users', 'action' => 'edit']);
    $routes->connect('/usuarios/view/*', ['controller' => 'Users', 'action' => 'view']);
    $routes->connect('/usuarios/codigos/ativo/*', ['controller' => 'Users', 'action' => 'codeativos']);
    $routes->connect('/usuario/obterCodigo/*', ['controller' => 'Users', 'action' => 'validarCodigo']);
    $routes->connect('/usuario/meuCodigo/*', ['controller' => 'Users', 'action' => 'meuCodigo']);
    $routes->connect('/usuario/redirecionar/*', ['controller' => 'Users', 'action' => 'redirecionar']);


    //PERFIS
    $routes->connect('/perfis/*', ['controller' => 'Perfis', 'action' => 'index']);
    $routes->connect('/perfis/add/*', ['controller' => 'Perfis', 'action' => 'add']);
    $routes->connect('/perfis/editar/*', ['controller' => 'Perfis', 'action' => 'edit']);
    $routes->connect('/perfis/view/*', ['controller' => 'Perfis', 'action' => 'view']);
    $routes->connect('/perfis/home/*', ['controller' => 'Perfis', 'action' => 'home']);
    $routes->connect('/meuperfil/*', ['controller' => 'Perfis', 'action' => 'perfil']);
    


    //CÓDIGOS
    $routes->connect('/codigos/*', ['controller' => 'Codigos', 'action' => 'index']);
    $routes->connect('/codigos/add/*', ['controller' => 'Codigos', 'action' => 'add']);
    $routes->connect('/codigos/editar/*', ['controller' => 'Codigos', 'action' => 'edit']);
    $routes->connect('/codigos/view/*', ['controller' => 'Codigos', 'action' => 'view']);
    $routes->connect('/codigos/itafro/*', ['controller' => 'Codigos', 'action' => 'ita']);
    $routes->connect('/codigos/medafro/*', ['controller' => 'Codigos', 'action' => 'med']);

    //CONTATOS
    $routes->connect('/contatos/*', ['controller' => 'Contatos', 'action' => 'index']);
    $routes->connect('/contatos/add/*', ['controller' => 'Contatos', 'action' => 'add']);
    $routes->connect('/contatos/editar/*', ['controller' => 'Contatos', 'action' => 'edit']);
    $routes->connect('/contatos/view/*', ['controller' => 'Contatos', 'action' => 'view']);
    
    //Matérias
    $routes->connect('/materias/*', ['controller' => 'Materias', 'action' => 'index']);
    $routes->connect('/materias/add/*', ['controller' => 'Materias', 'action' => 'add']);
    $routes->connect('/materias/editar/*', ['controller' => 'Materias', 'action' => 'edit']);
    $routes->connect('/materias/view/*', ['controller' => 'Materias', 'action' => 'view']);
    
    //Provas
    $routes->connect('/provas/*', ['controller' => 'Provas', 'action' => 'index']);
    $routes->connect('/provas/add/*', ['controller' => 'Provas', 'action' => 'add']);
    $routes->connect('/provas/editar/*', ['controller' => 'Provas', 'action' => 'edit']);
    $routes->connect('/provas/view/*', ['controller' => 'Provas', 'action' => 'view']);

    $routes->connect('/contact/*', ['controller' => 'Contact', 'action' => 'index']);



    $routes->setExtensions(['json', 'xml', 'html']);
    // apenas a ação obterDados será acionada na requisição desses tipos de extensions
    $routes->resources('Validar', ['only' => 'obterDadosServer']);
    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    
    $routes->fallbacks(DashedRoute::class);
});
