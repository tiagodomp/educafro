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
use Cake\Http\Middleware\CsrfProtectionMiddleware;
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
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));
    /// {nome_minusculo} = $this->model->
    /**
     * Apply a middleware to the current route scope.
     * Requires middleware to be registered via `Application::routes()` with `registerMiddleware()`
     */
    $routes->applyMiddleware('csrf');

    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    //$routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
    $routes->connect('/', ['controller' => 'User', 'action' => 'index']);
    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'UserCadastro', 'action' => 'index']);

    /// Rotas dos Administradores
    $routes->connect('/admin/index*', ['controller' => 'Administradores', 'action' => 'index']);
    $routes->connect('/admin/visualizar*', ['controller' => 'Administradores', 'action' => 'view']);
    $routes->connect('/admin/adicionar*', ['controller' => 'Administradores', 'action' => 'add']);
    $routes->connect('/admin/editar*', ['controller' => 'Administradores', 'action' => 'edit']);
    $routes->connect('/admin/apagar*', ['controller' => 'Administradores', 'action' => 'delete']);

    ///Rotas dos Administradores_Acoes
    $routes->connect('/admin/acoes/index*', ['controller' => 'AdministradoresAcoes', 'action' => 'index']);
    $routes->connect('/admin/acoes/visualizar*', ['controller' => 'AdministradoresAcoes', 'action' => 'view']);
    $routes->connect('/admin/acoes/adicionar*', ['controller' => 'AdministradoresAcoes', 'action' => 'add']);
    $routes->connect('/admin/acoes/editar*', ['controller' => 'AdministradoresAcoes', 'action' => 'edit']);
    $routes->connect('/admin/acoes/apagar*', ['controller' => 'AdministradoresAcoes', 'action' => 'delete']);

    ///Rotas dos Aministradores_Info
    $routes->connect('/admin/informacoes/index*', ['controller' => 'AdministradoresInfo', 'action' => 'index']);
    $routes->connect('/admin/informacoes/visualizar*', ['controller' => 'AdministradoresInfo', 'action' => 'view']);
    $routes->connect('/admin/informacoes/adicionar*', ['controller' => 'AdministradoresInfo', 'action' => 'add']);
    $routes->connect('/admin/informacoes/editar*', ['controller' => 'AdministradoresInfo', 'action' => 'edit']);
    $routes->connect('/admin/informacoes/apagar*', ['controller' => 'AdministradoresInfo', 'action' => 'delete']);

    ///Rotas dos Aministradores_Tokens
    $routes->connect('/admin/tokens/index*', ['controller' => 'AdministradoresTokens', 'action' => 'index']);
    $routes->connect('/admin/tokens/visualizar*', ['controller' => 'AdministradoresTokens', 'action' => 'view']);
    $routes->connect('/admin/tokens/adicionar*', ['controller' => 'AdministradoresTokens', 'action' => 'add']);
    $routes->connect('/admin/tokens/editar*', ['controller' => 'AdministradoresTokens', 'action' => 'edit']);
    $routes->connect('/admin/tokens/apagar*', ['controller' => 'AdministradoresTokens', 'action' => 'delete']);

    ///Rotas das Aulas
    $routes->connect('/aulas/index*', ['controller' => 'Aulas', 'action' => 'index']);
    $routes->connect('/aulas/visualizar*', ['controller' => 'Aulas', 'action' => 'view']);
    $routes->connect('/aulas/adicionar*', ['controller' => 'Aulas', 'action' => 'add']);
    $routes->connect('/aulas/editar*', ['controller' => 'Aulas', 'action' => 'edit']);
    $routes->connect('/aulas/apagar*', ['controller' => 'Aulas', 'action' => 'delete']);

    ///Rotas das Categorias
    $routes->connect('/categorias/index*', ['controller' => 'Categorizacao', 'action' => 'index']);
    $routes->connect('/categorias/visualizar*', ['controller' => 'Categorizacao', 'action' => 'view']);
    $routes->connect('/categorias/adicionar*', ['controller' => 'Categorizacao', 'action' => 'add']);
    $routes->connect('/categorias/editar*', ['controller' => 'Categorizacao', 'action' => 'edit']);
    $routes->connect('/categorias/apagar*', ['controller' => 'Categorizacao', 'action' => 'delete']);

    ///Rotas das Categorias_Info
    $routes->connect('/categorias/informacoes/index*', ['controller' => 'CategorizacaoInfo', 'action' => 'index']);
    $routes->connect('/categorias/informacoes/visualizar*', ['controller' => 'CategorizacaoInfo', 'action' => 'view']);
    $routes->connect('/categorias/informacoes/adicionar*', ['controller' => 'CategorizacaoInfo', 'action' => 'add']);
    $routes->connect('/categorias/informacoes/editar*', ['controller' => 'CategorizacaoInfo', 'action' => 'edit']);
    $routes->connect('/categorias/informacoes/apagar*', ['controller' => 'CategorizacaoInfo', 'action' => 'delete']);

    ///Rotas dos Códigos
    $routes->connect('/codigos/index*', ['controller' => 'Codigos', 'action' => 'index']);
    $routes->connect('/codigos/visualizar*', ['controller' => 'Codigos', 'action' => 'view']);
    $routes->connect('/codigos/adicionar*', ['controller' => 'Codigos', 'action' => 'add']);
    $routes->connect('/codigos/editar*', ['controller' => 'Codigos', 'action' => 'edit']);
    $routes->connect('/codigos/apagar*', ['controller' => 'Codigos', 'action' => 'delete']);

    ///Rotas dos Códigos_Info
    $routes->connect('/codigos/informacoes/index*', ['controller' => 'CodigosInfo', 'action' => 'index']);
    $routes->connect('/codigos/informacoes/visualizar*', ['controller' => 'CodigosInfo', 'action' => 'view']);
    $routes->connect('/codigos/informacoes/adicionar*', ['controller' => 'CodigosInfo', 'action' => 'add']);
    $routes->connect('/codigos/informacoes/editar*', ['controller' => 'CodigosInfo', 'action' => 'edit']);
    $routes->connect('/codigos/informacoes/apagar*', ['controller' => 'CodigosInfo', 'action' => 'delete']);

    ///Rotas dos Códigos_Tags
    $routes->connect('/codigos/tags/index*', ['controller' => 'CodigosTags', 'action' => 'index']);
    $routes->connect('/codigos/tags/visualizar*', ['controller' => 'CodigosTags', 'action' => 'view']);
    $routes->connect('/codigos/tags/adicionar*', ['controller' => 'CodigosTags', 'action' => 'add']);
    $routes->connect('/codigos/tags/editar*', ['controller' => 'CodigosTags', 'action' => 'edit']);
    $routes->connect('/codigos/tags/apagar*', ['controller' => 'CodigosTags', 'action' => 'delete']);

    ///Rotas dos Cursos
    $routes->connect('/cursos/index*', ['controller' => 'Cursos', 'action' => 'index']);
    $routes->connect('/cursos/visualizar*', ['controller' => 'Cursos', 'action' => 'view']);
    $routes->connect('/cursos/adicionar*', ['controller' => 'Cursos', 'action' => 'add']);
    $routes->connect('/cursos/editar*', ['controller' => 'Cursos', 'action' => 'edit']);
    $routes->connect('/cursos/apagar*', ['controller' => 'Cursos', 'action' => 'delete']);

    ///Rotas dos Cursos_Histórico
    $routes->connect('/cursos/historico/index*', ['controller' => 'CursosHistorico', 'action' => 'index']);
    $routes->connect('/cursos/historico/visualizar*', ['controller' => 'CursosHistorico', 'action' => 'view']);
    $routes->connect('/cursos/historico/adicionar*', ['controller' => 'CursosHistorico', 'action' => 'add']);
    $routes->connect('/cursos/historico/editar*', ['controller' => 'CursosHistorico', 'action' => 'edit']);
    $routes->connect('/cursos/historico/apagar*', ['controller' => 'CursosHistorico', 'action' => 'delete']);

    ///Rotas dos Cursos_Info
    $routes->connect('/cursos/informacoes/index*', ['controller' => 'CursosInfo', 'action' => 'index']);
    $routes->connect('/cursos/informacoes/visualizar*', ['controller' => 'CursosInfo', 'action' => 'view']);
    $routes->connect('/cursos/informacoes/adicionar*', ['controller' => 'CursosInfo', 'action' => 'add']);
    $routes->connect('/cursos/informacoes/editar*', ['controller' => 'CursosInfo', 'action' => 'edit']);
    $routes->connect('/cursos/informacoes/apagar*', ['controller' => 'CursosInfo', 'action' => 'delete']);

    ///Rotas dos Cursos_Modulos
    $routes->connect('/cursos/modulos/index*', ['controller' => 'CursosModulos', 'action' => 'index']);
    $routes->connect('/cursos/modulos/visualizar*', ['controller' => 'CursosModulos', 'action' => 'view']);
    $routes->connect('/cursos/modulos/adicionar*', ['controller' => 'CursosModulos', 'action' => 'add']);
    $routes->connect('/cursos/modulos/editar*', ['controller' => 'CursosModulos', 'action' => 'edit']);
    $routes->connect('/cursos/modulos/apagar*', ['controller' => 'CursosModulos', 'action' => 'delete']);

    ///Rotas dos Cursos_Secoes
    $routes->connect('/cursos/secoes/index*', ['controller' => 'CursosSecoes', 'action' => 'index']);
    $routes->connect('/cursos/secoes/visualizar*', ['controller' => 'CursosSecoes', 'action' => 'view']);
    $routes->connect('/cursos/secoes/adicionar*', ['controller' => 'CursosSecoes', 'action' => 'add']);
    $routes->connect('/cursos/secoes/editar*', ['controller' => 'CursosSecoes', 'action' => 'edit']);
    $routes->connect('/cursos/secoes/apagar*', ['controller' => 'CursosSecoes', 'action' => 'delete']);

    ///Rotas dos Discentes
    $routes->connect('/discentes/index*', ['controller' => 'Discentes', 'action' => 'index']);
    $routes->connect('/discentes/visualizar*', ['controller' => 'Discentes', 'action' => 'view']);
    $routes->connect('/discentes/adicionar*', ['controller' => 'Discentes', 'action' => 'add']);
    $routes->connect('/discentes/editar*', ['controller' => 'Discentes', 'action' => 'edit']);
    $routes->connect('/discentes/apagar*', ['controller' => 'Discentes', 'action' => 'delete']);

    ///Rotas dos Disciplinas
    $routes->connect('/disciplinas/index*', ['controller' => 'Disciplinas', 'action' => 'index']);
    $routes->connect('/disciplinas/visualizar*', ['controller' => 'Disciplinas', 'action' => 'view']);
    $routes->connect('/disciplinas/adicionar*', ['controller' => 'Disciplinas', 'action' => 'add']);
    $routes->connect('/disciplinas/editar*', ['controller' => 'Disciplinas', 'action' => 'edit']);
    $routes->connect('/disciplinas/apagar*', ['controller' => 'Disciplinas', 'action' => 'delete']);

    ///Rotas dos Docentes
    $routes->connect('/docentes/index*', ['controller' => 'Docentes', 'action' => 'index']);
    $routes->connect('/docentes/visualizar*', ['controller' => 'Docentes', 'action' => 'view']);
    $routes->connect('/docentes/adicionar*', ['controller' => 'Docentes', 'action' => 'add']);
    $routes->connect('/docentes/editar*', ['controller' => 'Docentes', 'action' => 'edit']);
    $routes->connect('/docentes/apagar*', ['controller' => 'Docentes', 'action' => 'delete']);

    ///Rotas dos Docentes_Tokens
    $routes->connect('/docentes/tokens/index*', ['controller' => 'DocentesTokens', 'action' => 'index']);
    $routes->connect('/docentes/tokens/visualizar*', ['controller' => 'DocentesTokens', 'action' => 'view']);
    $routes->connect('/docentes/tokens/adicionar*', ['controller' => 'DocentesTokens', 'action' => 'add']);
    $routes->connect('/docentes/tokens/editar*', ['controller' => 'DocentesTokens', 'action' => 'edit']);
    $routes->connect('/docentes/tokens/apagar*', ['controller' => 'DocentesTokens', 'action' => 'delete']);

    ///Rotas dos Eventos
    $routes->connect('/eventos/index*', ['controller' => 'Eventos', 'action' => 'index']);
    $routes->connect('/eventos/visualizar*', ['controller' => 'Eventos', 'action' => 'view']);
    $routes->connect('/eventos/adicionar*', ['controller' => 'Eventos', 'action' => 'add']);
    $routes->connect('/eventos/editar*', ['controller' => 'Eventos', 'action' => 'edit']);
    $routes->connect('/eventos/apagar*', ['controller' => 'Eventos', 'action' => 'delete']);

    ///Rotas de Grupos
    $routes->connect('/grupos/index*', ['controller' => 'Grupos', 'action' => 'index']);
    $routes->connect('/grupos/visualizar*', ['controller' => 'Grupos', 'action' => 'view']);
    $routes->connect('/grupos/adicionar*', ['controller' => 'Grupos', 'action' => 'add']);
    $routes->connect('/grupos/editar*', ['controller' => 'Grupos', 'action' => 'edit']);
    $routes->connect('/grupos/apagar*', ['controller' => 'Grupos', 'action' => 'delete']);

    ///Rotas de Grupos_De_Administradores
    $routes->connect('/grupos/administradores/index*', ['controller' => 'GruposDeAdministradores', 'action' => 'index']);
    $routes->connect('/grupos/administradores/visualizar*', ['controller' => 'GruposDeAdministradores', 'action' => 'view']);
    $routes->connect('/grupos/administradores/adicionar*', ['controller' => 'GruposDeAdministradores', 'action' => 'add']);
    $routes->connect('/grupos/administradores/editar*', ['controller' => 'GruposDeAdministradores', 'action' => 'edit']);
    $routes->connect('/grupos/administradores/apagar*', ['controller' => 'GruposDeAdministradores', 'action' => 'delete']);

    ///Rotas de Grupos_De_Discentes
    $routes->connect('/grupos/discentes/index*', ['controller' => 'GruposDeDiscentes', 'action' => 'index']);
    $routes->connect('/grupos/discentes/visualizar*', ['controller' => 'GruposDeDiscentes', 'action' => 'view']);
    $routes->connect('/grupos/discentes/adicionar*', ['controller' => 'GruposDeDiscentes', 'action' => 'add']);
    $routes->connect('/grupos/discentes/editar*', ['controller' => 'GruposDeDiscentes', 'action' => 'edit']);
    $routes->connect('/grupos/discentes/apagar*', ['controller' => 'GruposDeDiscentes', 'action' => 'delete']);

    ///Rotas de Grupos_De_Docentes
    $routes->connect('/grupos/docentes/index*', ['controller' => 'GruposDeDocentes', 'action' => 'index']);
    $routes->connect('/grupos/docentes/visualizar*', ['controller' => 'GruposDeDocentes', 'action' => 'view']);
    $routes->connect('/grupos/docentes/adicionar*', ['controller' => 'GruposDeDocentes', 'action' => 'add']);
    $routes->connect('/grupos/docentes/editar*', ['controller' => 'GruposDeDocentes', 'action' => 'edit']);
    $routes->connect('/grupos/docentes/apagar*', ['controller' => 'GruposDeDocentes', 'action' => 'delete']);

    ///Rotas de Grupos_De_Super_Usuarios
    $routes->connect('/grupos/super-usuarios/index*', ['controller' => 'GruposDeSuperUsuarios', 'action' => 'index']);
    $routes->connect('/grupos/super-usuarios/visualizar*', ['controller' => 'GruposDeSuperUsuarios', 'action' => 'view']);
    $routes->connect('/grupos/super-usuarios/adicionar*', ['controller' => 'GruposDeSuperUsuarios', 'action' => 'add']);
    $routes->connect('/grupos/super-usuarios/editar*', ['controller' => 'GruposDeSuperUsuarios', 'action' => 'edit']);
    $routes->connect('/grupos/super-usuarios/apagar*', ['controller' => 'GruposDeSuperUsuarios', 'action' => 'delete']);

    ///Rotas de Grupos_De_Voluntarios
    $routes->connect('/grupos/voluntarios/index*', ['controller' => 'GruposDeVoluntarios', 'action' => 'index']);
    $routes->connect('/grupos/voluntarios/visualizar*', ['controller' => 'GruposDeVoluntarios', 'action' => 'view']);
    $routes->connect('/grupos/voluntarios/adicionar*', ['controller' => 'GruposDeVoluntarios', 'action' => 'add']);
    $routes->connect('/grupos/voluntarios/editar*', ['controller' => 'GruposDeVoluntarios', 'action' => 'edit']);
    $routes->connect('/grupos/voluntarios/apagar*', ['controller' => 'GruposDeVoluntarios', 'action' => 'delete']);

    ///Rotas de Grupos_Historico
    $routes->connect('/grupos/historico/index*', ['controller' => 'GruposHistorico', 'action' => 'index']);
    $routes->connect('/grupos/historico/visualizar*', ['controller' => 'GruposHistorico', 'action' => 'view']);
    $routes->connect('/grupos/historico/adicionar*', ['controller' => 'GruposHistorico', 'action' => 'add']);
    $routes->connect('/grupos/historico/editar*', ['controller' => 'GruposHistorico', 'action' => 'edit']);
    $routes->connect('/grupos/historico/apagar*', ['controller' => 'GruposHistorico', 'action' => 'delete']);

    ///Rotas dos Grupos_Info
    $routes->connect('/grupos/informacoes/index*', ['controller' => 'GruposInfo', 'action' => 'index']);
    $routes->connect('/grupos/informacoes/visualizar*', ['controller' => 'GruposInfo', 'action' => 'view']);
    $routes->connect('/grupos/informacoes/adicionar*', ['controller' => 'GruposInfo', 'action' => 'add']);
    $routes->connect('/grupos/informacoes/editar*', ['controller' => 'GruposInfo', 'action' => 'edit']);
    $routes->connect('/grupos/informacoes/apagar*', ['controller' => 'GruposInfo', 'action' => 'delete']);

    ///Rotas dos Grupos_Membros
    $routes->connect('/grupos/membros/index*', ['controller' => 'GruposMembros', 'action' => 'index']);
    $routes->connect('/grupos/membros/visualizar*', ['controller' => 'GruposMembros', 'action' => 'view']);
    $routes->connect('/grupos/membros/adicionar*', ['controller' => 'GruposMembros', 'action' => 'add']);
    $routes->connect('/grupos/membros/editar*', ['controller' => 'GruposMembros', 'action' => 'edit']);
    $routes->connect('/grupos/membros/apagar*', ['controller' => 'GruposMembros', 'action' => 'delete']);

    ///Rotas dos Grupos_Secoes
    $routes->connect('/grupos/secoes/index*', ['controller' => 'GruposSecoes', 'action' => 'index']);
    $routes->connect('/grupos/secoes/visualizar*', ['controller' => 'GruposSecoes', 'action' => 'view']);
    $routes->connect('/grupos/secoes/adicionar*', ['controller' => 'GruposSecoes', 'action' => 'add']);
    $routes->connect('/grupos/secoes/editar*', ['controller' => 'GruposSecoes', 'action' => 'edit']);
    $routes->connect('/grupos/secoes/apagar*', ['controller' => 'GruposSecoes', 'action' => 'delete']);

    ///Rotas dos Log
    $routes->connect('/log/index*', ['controller' => 'Log', 'action' => 'index']);
    $routes->connect('/log/visualizar*', ['controller' => 'Log', 'action' => 'view']);
    $routes->connect('/log/adicionar*', ['controller' => 'Log', 'action' => 'add']);
    $routes->connect('/log/editar*', ['controller' => 'Log', 'action' => 'edit']);
    $routes->connect('/log/apagar*', ['controller' => 'Log', 'action' => 'delete']);

    ///Rotas de Modifcadores
    $routes->connect('/modifcadores/index*', ['controller' => 'Modifcadores', 'action' => 'index']);
    $routes->connect('/modifcadores/visualizar*', ['controller' => 'Modifcadores', 'action' => 'view']);
    $routes->connect('/modifcadores/adicionar*', ['controller' => 'Modifcadores', 'action' => 'add']);
    $routes->connect('/modifcadores/editar*', ['controller' => 'Modifcadores', 'action' => 'edit']);
    $routes->connect('/modifcadores/apagar*', ['controller' => 'Modifcadores', 'action' => 'delete']);

    ///Rotas de Notificacoes
    $routes->connect('/notificacoes/index*', ['controller' => 'Notificacoes', 'action' => 'index']);
    $routes->connect('/notificacoes/visualizar*', ['controller' => 'Notificacoes', 'action' => 'view']);
    $routes->connect('/notificacoes/adicionar*', ['controller' => 'Notificacoes', 'action' => 'add']);
    $routes->connect('/notificacoes/editar*', ['controller' => 'Notificacoes', 'action' => 'edit']);
    $routes->connect('/notificacoes/apagar*', ['controller' => 'Notificacoes', 'action' => 'delete']);

    ///Rotas de Outros
    $routes->connect('/outros/index*', ['controller' => 'Outros', 'action' => 'index']);
    $routes->connect('/outros/visualizar*', ['controller' => 'Outros', 'action' => 'view']);
    $routes->connect('/outros/adicionar*', ['controller' => 'Outros', 'action' => 'add']);
    $routes->connect('/outros/editar*', ['controller' => 'Outros', 'action' => 'edit']);
    $routes->connect('/outros/apagar*', ['controller' => 'Outros', 'action' => 'delete']);

    ///Rotas de Perfis
    $routes->connect('/perfis/index*', ['controller' => 'Perfis', 'action' => 'index']);
    $routes->connect('/perfis/visualizar*', ['controller' => 'Perfis', 'action' => 'view']);
    $routes->connect('/perfis/adicionar*', ['controller' => 'Perfis', 'action' => 'add']);
    $routes->connect('/perfis/editar*', ['controller' => 'Perfis', 'action' => 'edit']);
    $routes->connect('/perfis/apagar*', ['controller' => 'Perfis', 'action' => 'delete']);

    ///Rotas dos Perfis_Info
    $routes->connect('/perfis/informacoes/index*', ['controller' => 'PerfisInfo', 'action' => 'index']);
    $routes->connect('/perfis/informacoes/visualizar*', ['controller' => 'PerfisInfo', 'action' => 'view']);
    $routes->connect('/perfis/informacoes/adicionar*', ['controller' => 'PerfisInfo', 'action' => 'add']);
    $routes->connect('/perfis/informacoes/editar*', ['controller' => 'PerfisInfo', 'action' => 'edit']);
    $routes->connect('/perfis/informacoes/apagar*', ['controller' => 'PerfisInfo', 'action' => 'delete']);

    ///Rotas dos Perfis_Preferencias
    $routes->connect('/perfis/preferencias/index*', ['controller' => 'PerfisPreferencias', 'action' => 'index']);
    $routes->connect('/perfis/preferencias/visualizar*', ['controller' => 'PerfisPreferencias', 'action' => 'view']);
    $routes->connect('/perfis/preferencias/adicionar*', ['controller' => 'PerfisPreferencias', 'action' => 'add']);
    $routes->connect('/perfis/preferencias/editar*', ['controller' => 'PerfisPreferencias', 'action' => 'edit']);
    $routes->connect('/perfis/preferencias/apagar*', ['controller' => 'PerfisPreferencias', 'action' => 'delete']);

    ///Rotas dos Perfis_Uploads
    $routes->connect('/perfis/uploads/index*', ['controller' => 'PerfisUploads', 'action' => 'index']);
    $routes->connect('/perfis/uploads/visualizar*', ['controller' => 'PerfisUploads', 'action' => 'view']);
    $routes->connect('/perfis/uploads/adicionar*', ['controller' => 'PerfisUploads', 'action' => 'add']);
    $routes->connect('/perfis/uploads/editar*', ['controller' => 'PerfisUploads', 'action' => 'edit']);
    $routes->connect('/perfis/uploads/apagar*', ['controller' => 'PerfisUploads', 'action' => 'delete']);

    ///Rotas de Provas
    $routes->connect('/provas/index*', ['controller' => 'Provas', 'action' => 'index']);
    $routes->connect('/provas/visualizar*', ['controller' => 'Provas', 'action' => 'view']);
    $routes->connect('/provas/adicionar*', ['controller' => 'Provas', 'action' => 'add']);
    $routes->connect('/provas/editar*', ['controller' => 'Provas', 'action' => 'edit']);
    $routes->connect('/provas/apagar*', ['controller' => 'Provas', 'action' => 'delete']);

    ///Rotas de Regras
    $routes->connect('/regras/index*', ['controller' => 'Regras', 'action' => 'index']);
    $routes->connect('/regras/visualizar*', ['controller' => 'Regras', 'action' => 'view']);
    $routes->connect('/regras/adicionar*', ['controller' => 'Regras', 'action' => 'add']);
    $routes->connect('/regras/editar*', ['controller' => 'Regras', 'action' => 'edit']);
    $routes->connect('/regras/apagar*', ['controller' => 'Regras', 'action' => 'delete']);

    ///Rotas de Regras_Hierarquias
    $routes->connect('/regras/hierarquias/index*', ['controller' => 'RegrasHierarquias', 'action' => 'index']);
    $routes->connect('/regras/hierarquias/visualizar*', ['controller' => 'RegrasHierarquias', 'action' => 'view']);
    $routes->connect('/regras/hierarquias/adicionar*', ['controller' => 'RegrasHierarquias', 'action' => 'add']);
    $routes->connect('/regras/hierarquias/editar*', ['controller' => 'RegrasHierarquias', 'action' => 'edit']);
    $routes->connect('/regras/hierarquias/apagar*', ['controller' => 'RegrasHierarquias', 'action' => 'delete']);

    ///Rotas de Regras_Historico_Atribuicoes
    $routes->connect('/regras/historicos/atribuicoes/index*', ['controller' => 'RegrasHistoricoAtribuicoes', 'action' => 'index']);
    $routes->connect('/regras/historicos/atribuicoes/visualizar*', ['controller' => 'RegrasHistoricoAtribuicoes', 'action' => 'view']);
    $routes->connect('/regras/historicos/atribuicoes/adicionar*', ['controller' => 'RegrasHistoricoAtribuicoes', 'action' => 'add']);
    $routes->connect('/regras/historicos/atribuicoes/editar*', ['controller' => 'RegrasHistoricoAtribuicoes', 'action' => 'edit']);
    $routes->connect('/regras/historicos/atribuicoes/apagar*', ['controller' => 'RegrasHistoricoAtribuicoes', 'action' => 'delete']);

    ///Rotas de Regras_Permicao_Crud
    $routes->connect('/regras/permicoes/index*', ['controller' => 'RegrasPermicaoCrud', 'action' => 'index']);
    $routes->connect('/regras/permicoes/visualizar*', ['controller' => 'RegrasPermicaoCrud', 'action' => 'view']);
    $routes->connect('/regras/permicoes/adicionar*', ['controller' => 'RegrasPermicaoCrud', 'action' => 'add']);
    $routes->connect('/regras/permicoes/editar*', ['controller' => 'RegrasPermicaoCrud', 'action' => 'edit']);
    $routes->connect('/regras/permicoes/apagar*', ['controller' => 'RegrasPermicaoCrud', 'action' => 'delete']);

    ///Rotas dos Subtemas
    $routes->connect('/subtemas/index*', ['controller' => 'Subtemas', 'action' => 'index']);
    $routes->connect('/subtemas/visualizar*', ['controller' => 'Subtemas', 'action' => 'view']);
    $routes->connect('/subtemas/adicionar*', ['controller' => 'Subtemas', 'action' => 'add']);
    $routes->connect('/subtemas/editar*', ['controller' => 'Subtemas', 'action' => 'edit']);
    $routes->connect('/subtemas/apagar*', ['controller' => 'Subtemas', 'action' => 'delete']);

    ///Rotas de Super_Usuarios_Acoes
    $routes->connect('/super-usuarios/acoes/index*', ['controller' => 'SuperUsuariosAcoes', 'action' => 'index']);
    $routes->connect('/super-usuarios/acoes/visualizar*', ['controller' => 'SuperUsuariosAcoes', 'action' => 'view']);
    $routes->connect('/super-usuarios/acoes/adicionar*', ['controller' => 'SuperUsuariosAcoes', 'action' => 'add']);
    $routes->connect('/super-usuarios/acoes/editar*', ['controller' => 'SuperUsuariosAcoes', 'action' => 'edit']);
    $routes->connect('/super-usuarios/acoes/apagar*', ['controller' => 'SuperUsuariosAcoes', 'action' => 'delete']);

    ///Rotas de Super_Usuarios
    $routes->connect('/super-usuarios/index*', ['controller' => 'SuperUsuarios', 'action' => 'index']);
    $routes->connect('/super-usuarios/visualizar*', ['controller' => 'SuperUsuarios', 'action' => 'view']);
    $routes->connect('/super-usuarios/adicionar*', ['controller' => 'SuperUsuarios', 'action' => 'add']);
    $routes->connect('/super-usuarios/editar*', ['controller' => 'SuperUsuarios', 'action' => 'edit']);
    $routes->connect('/super-usuarios/apagar*', ['controller' => 'SuperUsuarios', 'action' => 'delete']);

    ///Rotas de Super_Usuarios_Info
    $routes->connect('/super-usuarios/informacoes/index*', ['controller' => 'SuperUsuariosInfo', 'action' => 'index']);
    $routes->connect('/super-usuarios/informacoes/visualizar*', ['controller' => 'SuperUsuariosInfo', 'action' => 'view']);
    $routes->connect('/super-usuarios/informacoes/adicionar*', ['controller' => 'SuperUsuariosInfo', 'action' => 'add']);
    $routes->connect('/super-usuarios/informacoes/editar*', ['controller' => 'SuperUsuariosInfo', 'action' => 'edit']);
    $routes->connect('/super-usuarios/informacoes/apagar*', ['controller' => 'SuperUsuariosInfo', 'action' => 'delete']);

    ///Rotas de Super_Usuarios_Token
    $routes->connect('/super-usuarios/token/index*', ['controller' => 'SuperUsuariosToken', 'action' => 'index']);
    $routes->connect('/super-usuarios/token/visualizar*', ['controller' => 'SuperUsuariosToken', 'action' => 'view']);
    $routes->connect('/super-usuarios/token/adicionar*', ['controller' => 'SuperUsuariosToken', 'action' => 'add']);
    $routes->connect('/super-usuarios/token/editar*', ['controller' => 'SuperUsuariosToken', 'action' => 'edit']);
    $routes->connect('/super-usuarios/token/apagar*', ['controller' => 'SuperUsuariosToken', 'action' => 'delete']);

    ///Rotas de Tags
    $routes->connect('/tags/index*', ['controller' => 'Tags', 'action' => 'index']);
    $routes->connect('/tags/visualizar*', ['controller' => 'Tags', 'action' => 'view']);
    $routes->connect('/tags/adicionar*', ['controller' => 'Tags', 'action' => 'add']);
    $routes->connect('/tags/editar*', ['controller' => 'Tags', 'action' => 'edit']);
    $routes->connect('/tags/apagar*', ['controller' => 'Tags', 'action' => 'delete']);

    ///Rotas de Temas
    $routes->connect('/temas/index*', ['controller' => 'Temas', 'action' => 'index']);
    $routes->connect('/temas/visualizar*', ['controller' => 'Temas', 'action' => 'view']);
    $routes->connect('/temas/adicionar*', ['controller' => 'Temas', 'action' => 'add']);
    $routes->connect('/temas/editar*', ['controller' => 'Temas', 'action' => 'edit']);
    $routes->connect('/temas/apagar*', ['controller' => 'Temas', 'action' => 'delete']);

    ///Rotas de User_Atibuicoes
    $routes->connect('/usuarios/atribuicoes/index*', ['controller' => 'UserAtibuicoes', 'action' => 'index']);
    $routes->connect('/usuarios/atribuicoes/visualizar*', ['controller' => 'UserAtibuicoes', 'action' => 'view']);
    $routes->connect('/usuarios/atribuicoes/adicionar*', ['controller' => 'UserAtibuicoes', 'action' => 'add']);
    $routes->connect('/usuarios/atribuicoes/editar*', ['controller' => 'UserAtibuicoes', 'action' => 'edit']);
    $routes->connect('/usuarios/atribuicoes/apagar*', ['controller' => 'UserAtibuicoes', 'action' => 'delete']);

    ///Rotas de User_Cadastro
    $routes->connect('/usuarios/cadastro/index*', ['controller' => 'UserCadastro', 'action' => 'index']);
    $routes->connect('/usuarios/cadastro/visualizar*', ['controller' => 'UserCadastro', 'action' => 'view']);
    $routes->connect('/usuarios/cadastro/adicionar*', ['controller' => 'UserCadastro', 'action' => 'add']);
    $routes->connect('/usuarios/cadastro/editar*', ['controller' => 'UserCadastro', 'action' => 'edit']);
    $routes->connect('/usuarios/cadastro/apagar*', ['controller' => 'UserCadastro', 'action' => 'delete']);

    ///Rotas de User
    $routes->connect('/usuarios/index*', ['controller' => 'User', 'action' => 'index']);
    $routes->connect('/usuarios/visualizar*', ['controller' => 'User', 'action' => 'view']);
    $routes->connect('/usuarios/adicionar*', ['controller' => 'User', 'action' => 'add']);
    $routes->connect('/usuarios/editar*', ['controller' => 'User', 'action' => 'edit']);
    $routes->connect('/usuarios/apagar*', ['controller' => 'User', 'action' => 'delete']);

    ///Rotas de User_Historico_Acoes
    $routes->connect('/usuario/historico/acoes/index*', ['controller' => 'UserHistoricoAtribuicoes', 'action' => 'index']);
    $routes->connect('/usuario/historico/acoes/visualizar*', ['controller' => 'RegrasHistoricoAtribuicoes', 'action' => 'view']);
    $routes->connect('/usuario/historico/acoes/adicionar*', ['controller' => 'RegrasHistoricoAtribuicoes', 'action' => 'add']);
    $routes->connect('/usuario/historico/acoes/editar*', ['controller' => 'RegrasHistoricoAtribuicoes', 'action' => 'edit']);
    $routes->connect('/usuario/historico/acoes/apagar*', ['controller' => 'RegrasHistoricoAtribuicoes', 'action' => 'delete']);

    ///Rotas de User_Historico_Senha
    $routes->connect('/usuario/historico/senhas/index*', ['controller' => 'UserHistoricoSenha', 'action' => 'index']);
    $routes->connect('/usuario/historico/senhas/visualizar*', ['controller' => 'RegrasHistoricoSenha', 'action' => 'view']);
    $routes->connect('/usuario/historico/senhas/adicionar*', ['controller' => 'RegrasHistoricoSenha', 'action' => 'add']);
    $routes->connect('/usuario/historico/senhas/editar*', ['controller' => 'RegrasHistoricoSenha', 'action' => 'edit']);
    $routes->connect('/usuario/historico/senhas/apagar*', ['controller' => 'RegrasHistoricoSenha', 'action' => 'delete']);

    ///Rotas de User_Info
    $routes->connect('/usuarios/informacoes/index*', ['controller' => 'UserInfo', 'action' => 'index']);
    $routes->connect('/usuarios/informacoes/visualizar*', ['controller' => 'UserInfo', 'action' => 'view']);
    $routes->connect('/usuarios/informacoes/adicionar*', ['controller' => 'UserInfo', 'action' => 'add']);
    $routes->connect('/usuarios/informacoes/editar*', ['controller' => 'UserInfo', 'action' => 'edit']);
    $routes->connect('/usuarios/informacoes/apagar*', ['controller' => 'UserInfo', 'action' => 'delete']);

    ///Rotas de User_Inscricoes
    $routes->connect('/usuarios/inscricoes/index*', ['controller' => 'UserInscricoes', 'action' => 'index']);
    $routes->connect('/usuarios/inscricoes/visualizar*', ['controller' => 'UserInscricoes', 'action' => 'view']);
    $routes->connect('/usuarios/inscricoes/adicionar*', ['controller' => 'UserInscricoes', 'action' => 'add']);
    $routes->connect('/usuarios/inscricoes/editar*', ['controller' => 'UserInscricoes', 'action' => 'edit']);
    $routes->connect('/usuarios/inscricoes/apagar*', ['controller' => 'UserInscricoes', 'action' => 'delete']);

    ///Rotas de User_Preferencias
    $routes->connect('/usuarios/preferencias/index*', ['controller' => 'UserPreferencias', 'action' => 'index']);
    $routes->connect('/usuarios/preferencias/visualizar*', ['controller' => 'UserPreferencias', 'action' => 'view']);
    $routes->connect('/usuarios/preferencias/adicionar*', ['controller' => 'UserPreferencias', 'action' => 'add']);
    $routes->connect('/usuarios/preferencias/editar*', ['controller' => 'UserPreferencias', 'action' => 'edit']);
    $routes->connect('/usuarios/preferencias/apagar*', ['controller' => 'UserPreferencias', 'action' => 'delete']);

    ///Rotas de Voluntarios
    $routes->connect('/voluntarios/index*', ['controller' => 'Voluntarios', 'action' => 'index']);
    $routes->connect('/voluntarios/visualizar*', ['controller' => 'Voluntarios', 'action' => 'view']);
    $routes->connect('/voluntarios/adicionar*', ['controller' => 'Voluntarios', 'action' => 'add']);
    $routes->connect('/voluntarios/editar*', ['controller' => 'Voluntarios', 'action' => 'edit']);
    $routes->connect('/voluntarios/apagar*', ['controller' => 'Voluntarios', 'action' => 'delete']);

    ///Rotas de Voluntarios_tokens
    $routes->connect('/voluntarios/tokens/index*', ['controller' => 'VoluntariosToken', 'action' => 'index']);
    $routes->connect('/voluntarios/tokens/visualizar*', ['controller' => 'VoluntariosToken', 'action' => 'view']);
    $routes->connect('/voluntarios/tokens/adicionar*', ['controller' => 'VoluntariosToken', 'action' => 'add']);
    $routes->connect('/voluntarios/tokens/editar*', ['controller' => 'VoluntariosToken', 'action' => 'edit']);
    $routes->connect('/voluntarios/tokens/apagar*', ['controller' => 'VoluntariosToken', 'action' => 'delete']);



    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *
     * ```
     * $routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);
     * $routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);
     * ```
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

/**
 * If you need a different set of middleware or none at all,
 * open new scope and define routes there.
 *
 * ```
 * Router::scope('/api', function (RouteBuilder $routes) {
 *     // No $routes->applyMiddleware() here.
 *     // Connect API actions here.
 * });
 * ```
 */
