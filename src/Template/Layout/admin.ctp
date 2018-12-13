 <?php
/**
 * Created by PhpStorm.
 * User: Tiago Pereira
 * Date: 06/12/2018
 * Time: 17:30
 */

$cakeDescription = 'Educafro Descomplica';
$session = $this->request->getSession();
$perfil = $session->read('Auth.User');
$countNotas = 2;
?>

<?=  echo $this->Html->docType() ?>
<html class="no-js" lang="pt-br">

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Educafro Descomplica.com.br - Bolsas de estudo de até 100%, da matrícula ao final do curso - Graduação, Pós-Graduação, Preparatórios e Ensino Médio/Fundamental">
    <meta name="author" content="Tiago Pereira">

    <meta name="robots" content="noodp">
    <link rel="canonical" href="https://www.educafro.org.br/site/">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Educafro Descomplica - Bolsas de estudo de até 100%">
    <meta property="og:description" content="Educafro - Bolsas de estudo de até 100%, da matrícula ao final do curso - Graduação, Pós-Graduação, Preparatórios e Ensino Médio/Fundamental">
    <meta property="og:url" content="https://www.educafro.org.br/site/">
    <meta property="og:site_name" content="EDUCAFRO - Descomplica">

    <meta name="google-signin-client_id" content="350259929220-305vvf0tpj21uasm2g7frfjklhlej80a.apps.googleusercontent.com">

    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- favicon
		============================================ -->
    <?= $this->Html->meta('icon') ?>
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <?= $this->Html->css('assets/bootstrap.min.css') ?>
    <!-- Bootstrap CSS
		============================================ -->
    <?= $this->Html->css('assets/font-awesome.min.css') ?>
    <!-- owl.carousel CSS
		============================================ -->
    <?= $this->Html->css('assets/owl.carousel.css') ?>
    <?= $this->Html->css('assets/owl.theme.css') ?>
    <?= $this->Html->css('assets/owl.transitions.css') ?>
    <!-- animate CSS
		============================================ -->
    <?= $this->Html->css('assets/animate.css') ?>
    <!-- normalize CSS
		============================================ -->
    <?= $this->Html->css('assets/normalize.css') ?>
    <!-- meanmenu icon CSS
		============================================ -->
    <?= $this->Html->css('assets/meanmenu.min.css') ?>
    <!-- main CSS
		============================================ -->
    <?= $this->Html->css('assets/main.css') ?>
    <!-- educate icon CSS
		============================================ -->
    <?= $this->Html->css('assets/educate-custon-icon.css') ?>
    <!-- morrisjs CSS
		============================================ -->
    <?= $this->Html->css('assets/morrisjs/morris.css') ?>
    <!-- mCustomScrollbar CSS
		============================================ -->
    <?= $this->Html->css('assets/scrollbar/jquery.mCustomScrollbar.min.css') ?>
    <!-- metisMenu CSS
		============================================ -->
    <?= $this->Html->css('assets/metisMenu/metisMenu.min.css') ?>
    <?= $this->Html->css('assets/metisMenu/metisMenu-vertical.css') ?>
    <!-- calendar CSS
		============================================ -->
    <?= $this->Html->css('assets/calendar/fullcalendar.min.css') ?>
    <?= $this->Html->css('assets/calendar/fullcalendar.print.min.css') ?>
    <!-- style CSS
		============================================ -->
    <?= $this->Html->css('style.css') ?>
    <!-- responsive CSS
		============================================ -->
    <?= $this->Html->css('assets/responsive.css') ?>
    <!-- modernizr JS
		============================================ -->
<?= $this->Html->script('assets/vendor/modernizr-2.8.3.min.js') ?>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">Você está utilizando um navegador<strong>desatualizado</strong> Por favor, <a href="https://www.microsoft.com/pt-br/windows/microsoft-edge">atualize seu navegador</a> para melhorar sua experiência.</p>
<![endif]-->
<!-- Start Left menu area -->
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <?= echo $this->Html->image("assets/logo/logo-educafro-horizontal-200x60px.png", [
                "alt" => "Logo Educafro 200x60px",
                'class' => 'main-logo',
                'url' => ['controller' => '**************', 'action' => '***********']
            ]) ?>
            <!-- Saída: <a href="index.html"><img class="main-logo" src="img/assets/logo/logo-educafro-horizontal-200x60px.png" alt="logo educafro horizontal 200x60px" /></a> -->
            <strong>
                <?= echo $this->Html->image("assets/logo/logo-educafro-45x38px.png", [
                    "alt" => "Logo Educafro 45x38px",
                    'url' => ['controller' => '**************', 'action' => '***********']
                ]) ?>
                <!-- Saída: <a href="index.html"><img src="img/assets/logo/logo-educafro-45x38px.png" alt="logo educafro 45x38px" /></a>-->
            </strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="has-arrow" href="<?= echo $this->Url->build('/home', true) ?>">
                            <span class="educate-icon educate-home icon-wrap"></span>
                            <span class="mini-click-non"><?= __('Educafro') ?></span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Feed Noticias" href="<?= echo $this->Url->build([
                                                                    "controller" => "*********",
                                                                    "action" => "*********",
                                                                    "fullbase" => true
                                                                ]) ?>">
                                    <span class="mini-sub-pro"><?= __('Feed de Notícias') ?></span>
                                </a>
                            </li>
                            <li><a title="Minhas Demandas" href="<?= echo $this->Url->build('/user/demandas', true)?>">
                                    <span class="mini-sub-pro"><?= __('Minhas Demandas') ?></span> <!-- saida: http://dominio.com/user/demandas -->
                                </a>
                            </li>
                            <li><a title="pesquisa recursiva” href="<?= echo $this->Url->build('/timeline', true)?>">
                                <span class="mini-sub-pro"><?= __('Linha temporal') ?></span>
                                </a>
                            </li>

                            <li><a title="Análise técnica” href="<?= echo $this->Url->build('/analise', true)?>">
                                <span class="mini-sub-pro"><?= __('Análise Técnica') ?></span>
                                </a>
                            </li>
                            <li><a title="laboratório de Insights" href="<?= echo $this->Url->build('/insights', true)?>">
                                    <span class="mini-sub-pro"><?= __('Laboratório de Insights') ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a title="Landing Page" href="<?= echo $this->Url->build('/eventos', true)?>" aria-expanded="false">
                            <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                            <span class="mini-click-non"><?= __('Eventos') ?></span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?= echo $this->Url->build('/professores', true)?>" aria-expanded="false">
                            <span class="educate-icon educate-professor icon-wrap"></span>
                            <span class="mini-click-non"><?= __('Professores') ?></span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
<<<<<<< HEAD
                            <li><a title="Todos profesores" href="<?= echo $this->Url->build('/professores/todos', true)?>">
                                    <span class="mini-sub-pro"><?= __('Todos Professores') ?></span>
                                </a>
                            </li>
                            <li><a title="Novo Professor" href="<?= echo $this->Url->build('/professores/novo', true)?>">
                                    <span class="mini-sub-pro"><?= __('Novo Professor') ?></span>
                                </a>
                            </li>
                            <li><a title="Editar Professor" href="<?= echo $this->Url->build('/professores/editar', true)?>">
                                    <span class="mini-sub-pro"><?= __('Editar Professor') ?></span>
                                </a>
                            </li>
                            <li><a title="Perfil do Professor" href="<?= echo $this->Url->build('/professores/perfil', true)?>">
                                    <span class="mini-sub-pro"><?= __('Perfil do Professor') ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?= echo $this->Url->build('/voluntarios', true)?>" aria-expanded="false">
                            <span class="educate-icon educate-professor icon-wrap"></span>
                            <span class="mini-click-non"><?= __('Voluntários') ?></span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Todos Voluntários" href="<?= echo $this->Url->build('/voluntarios/todos', true)?>">
                                    <span class="mini-sub-pro"><?= __('Todos Voluntários') ?></span>
                                </a>
                            </li>
                            <li><a title="Novo Voluntário" href="<?= echo $this->Url->build('/voluntarios/novo', true)?>">
                                    <span class="mini-sub-pro"><?= __('Novo Voluntário') ?></span>
                                </a>
                            </li>
                            <li><a title="Editar Voluntários" href="<?= echo $this->Url->build('/voluntarios/editar', true)?>">
                                    <span class="mini-sub-pro"><?= __('Editar Voluntários') ?></span>
                                </a>
                            </li>
                            <li><a title="Perfil dos Voluntários" href="<?= echo $this->Url->build('/voluntarios/perfil', true)?>">
                                    <span class="mini-sub-pro"><?= __('Perfil do Voluntário') ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?= echo $this->Url->build('/alunos', true)?>" aria-expanded="false">
                            <span class="educate-icon educate-student icon-wrap"></span>
                            <span class="mini-click-non"><?= __('Alunos') ?></span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Todos Alunos" href="<?= echo $this->Url->build('/alunos/todos', true)?>">
                                    <span class="mini-sub-pro"><?= __('Todos Alunos') ?></span>
                                </a>
                            </li>
                            <li><a title="Novo Aluno" href="<?= echo $this->Url->build('/alunos/novo', true)?>">
                                    <span class="mini-sub-pro"><?= __('Novo Aluno') ?></span>
                                </a>
                            </li>
                            <li><a title="Editar Aluno" href="<?= echo $this->Url->build('/alunos/editar', true)?>">
                                    <span class="mini-sub-pro"><?= __('Editar Aluno') ?></span>
                                </a>
                            </li>
                            <li><a title="Perfil do Aluno" href="<?= echo $this->Url->build('/alunos/perfil', true)?>">
                                    <span class="mini-sub-pro"><?= __('Perfil do Aluno') ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?= echo $this->Url->build('/cursos', true);?>" aria-expanded="false">
                            <span class="educate-icon educate-course icon-wrap"></span>
                            <span class="mini-click-non"><?= __('Cursos') ?></span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Todos os cursos" href="<?= echo $this->Url->build('/cursos/todos', true)?>">
                                    <span class="mini-sub-pro"><?= __('Todos os cursos') ?></span>
                                </a>
                            </li>
                            <li><a title="Novo Curso" href="<?= echo $this->Url->build('/cursos/novo', true)?>">
                                    <span class="mini-sub-pro"><?= __('Novo curso') ?></span>
                                </a>
                            </li>
                            <li><a title="Editar Curso" href="<?= echo $this->Url->build('/cursos/editar', true)?>">
                                    <span class="mini-sub-pro"><?= __('Editar curso') ?></span>
                                </a>
                            </li>
                            <li><a title="Ver Curso" href="<?= echo $this->Url->build('/cursos/perfil', true) ?>">
                                    <span class="mini-sub-pro"><?= __('Ver curso') ?></span>
                                </a>
                            </li>
                            <li><a title="Product Payment" href="<?= echo $this->Url->build('/cursos/analise', true) ?>">
                                    <span class="mini-sub-pro"><?= __('Análise dos cursos') ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?= echo $this->Url->build('/ferramentas', true) ?>" aria-expanded="false">
                            <span class="educate-icon educate-library icon-wrap"></span>
                            <span class="mini-click-non"><?= __('Maleta de Ferramentas') ?></span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Todas as ferramentas" href="<?= echo $this->Url->build('/ferramentas/todos', true) ?>">
                                    <span class="mini-sub-pro"><?= __('Todas as ferramentas') ?></span>
                                </a>
                            </li>
                            <li><a title="Nova Ferramenta" href="<?= echo $this->Url->build('/ferramentas/novo', true) ?>">
                                    <span class="mini-sub-pro"><?= __('Nova Ferramenta') ?></span>
                                </a>
                            </li>
                            <li><a title="Editar Ferramentas" href="<?= echo $this->Url->build('/ferramentas/editar', true) ?>">
                                    <span class="mini-sub-pro"><?= __('Editar Ferramentas') ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?= echo $this->Url->build('/departamentos', true) ?>" aria-expanded="false">
                            <span class="educate-icon educate-department icon-wrap"></span>
                            <span class="mini-click-non"><?= __('Departamentos') ?></span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Lista de Departamentos" href="<?= echo $this->Url->build('/departamentos/todos', true) ?>">
                                    <span class="mini-sub-pro"><?= __('Lista de Departamentos') ?></span>
                                </a>
                            </li>
                            <li><a title="Criar Departamento" href="<?= echo $this->Url->build('/departamentos/novo', true) ?>">
                                    <span class="mini-sub-pro"><?= __('Criar Departamento') ?></span>
                                </a>
                            </li>
                            <li><a title="Editar Departamentos" href="<?= echo $this->Url->build('/departamentos/editar', true) ?>">
                                    <span class="mini-sub-pro"><?= __('Editar Departamento') ?></span>
                                </a>
                            </li>
                            <li><a title="Análise Departamental" href="<?= echo $this->Url->build('/departamentos/analise', true) ?>">
                                    <span class="mini-sub-pro"><?= __('Análise Departamental') ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?= echo $this->Url->build('/mensagens', true) ?>" aria-expanded="false">
                            <span class="educate-icon educate-message icon-wrap"></span>
                            <span class="mini-click-non"><?= __('Caixa de Mensagens') ?></span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Recentes" href="<?= echo $this->Url->build('/mensagens/recentes', true) ?>">
                                    <span class="mini-sub-pro"><?= __('Recentes') ?></span>
                                </a>
                            </li>
                            <li><a title="Solicitações de mensagens" href="<?= echo $this->Url->build('/mensagens/solicitacoes', true) ?>">
                                    <span class="mini-sub-pro"><?= __('Solicitações de Mensagens') ?></span>
                                </a>
                            </li>
                            <li><a title="Novo Grupo" href="<?= echo $this->Url->build('/mensagens/grupo/novo', true) ?>">
                                    <span class="mini-sub-pro"><?= __('Novo Grupo') ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <?= echo $this->Html->image("assets/logo/logo-educafro-horizontal-200x60px.png", [
                        "alt" => "Logo Educafro 200x60px",
                        'class' => 'main-logo',
                        'url' => ['controller' => '**************', 'action' => '***********']
                    ]) ?>
                    <!-- saída: <a href="index.html"><img class="main-logo" src="img/assets/logo/logo-educafro-horizontal-200x60px.png" alt="logo educafro horizontal 200x60px" /></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="logo-pro">
                <?= echo $this->Html->image("assets/logo/logo-educafro-horizontal-200x60px.png", [
                    "alt" => "Logo Educafro 200x60px",
                    'class' => 'main-logo',
                    'url' => ['controller' => '**************', 'action' => '***********']
                ]) ?>
                <!-- SAÍDA: <a href="index.html"><img class="main-logo" src="img/assets/logo/logo-educafro-horizontal-200x60px.png" alt="logo educafro horizontal 200x60px" /></a>-->
            </div>
        </div>
    </div>
</div>
<div class="header-advance-area">
    <div class="header-top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-top-wraper">
                        <div class="row">
                            <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                <div class="menu-switcher-pro">
                                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                        <i class="educate-icon educate-nav"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        <li class="nav-item">
                                            <a href="<?= echo $this->Url->build('/home', true) ?>" class="nav-link"><?= __('Início')?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= echo $this->Url->build('/pesquisas', true) ?>" class="nav-link"><?= __('Pesquisas')?></a>
                                        </li>
                                        <li class="nav-item"><a href="<?= echo $this->Url->build('/servicos', true) ?>" class="nav-link"><?= __('Serviços')?></a>
                                        </li>
                                        <li class="nav-item dropdown res-dis-nn">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><?= __('Demandas')?>
                                                <span class="angle-down-topmenu">
                                                    <i class="fa fa-angle-down"></i>
                                                </span>
                                            </a>
                                            <div role="menu" class="dropdown-menu animated zoomIn">
                                                <!-- demandas => truncadas, encerradas, concluídas, -->
                                                <a href="<?= echo $this->Url->build('user/demandas/todos', true) ?>" class="dropdown-item"><?= __('Minhas Demandas')?></a>
                                                <a href="<?= echo $this->Url->build('/demandas/truncadas', true) ?>" class="dropdown-item"><?= __('Demandas em desenvolvimento') ?></a>
                                                <a href="<?= echo $this->Url->build('/demandas/info/', true) ?>" class="dropdown-item"><?= __('Contibruir em alguma demanda'?></a>
                                                <a href="<?= echo $this->Url->build('/demandas/todos', true) ?>" class="dropdown-item"><?= __('Todas demandas públicas') ?></a>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a href="<?= echo $this->Url->build('/suporte', true) ?>" class="nav-link"><?= __('Suporte') ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item dropdown">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i>
                                                <span class="indicator-ms"></span>
                                            </a>
                                            <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                <div class="message-single-top">
                                                    <h1><?= __('Mensagens') ?></h1>
                                                </div>
                                                <ul class="message-menu">
                                                    <?php foreach(mensagens as mensagem): ?>
                                                    <li>
                                                        <a href="<?= echo $this->Url->build([
                                                                                    "controller" => "mensagens",
                                                                                    "action" => "todos",
                                                                                    $mensagem->id
                                                                                ]);?>">
                                                            <div class="message-img">
                                                                <?= echo $this->Html->image($mensagem->remetente->user->perfi->img, ['alt' => 'Foto de Perfil do usuário remetente']) ?>
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date"><?= h($mensagem->dataObtida)?></span>
                                                                <h2><? h($mensagem->remetente->user->perfi->nome) ?></h2>
                                                                <p><? h($mensagem->msg) ?></p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <?php endforeach; ?>
                                                <div class="message-view">
                                                    <a href="<?= echo $this->Url->build('/mensagens/todos', true) ?>"><?= __('Ver todas as Mensagens') ?></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <i class="educate-icon educate-bell" aria-hidden="true"></i>
                                                <span class="indicator-nt"></span>
                                            </a>
                                            <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                <div class="notification-single-top">
                                                    <h1><?= __('Notificações') ?></h1>
                                                </div>
                                                <ul class="notification-menu">
                                                    <?php foreach($notificacoes as $notificacao): ?>
                                                    <li>
                                                        <a href="<?= echo $this->Url->build([
                                                            "controller" => "notificacao",
                                                            "action" => "todos",
                                                            $notificacao->id
                                                        ]);?>">
                                                            <div class="notification-icon">
                                                                <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date"><?= h($notificacao->dataObtida)?></span>
                                                                <h2><?= h($notificacao->remetente->user->perfi->nome) ?></h2>
                                                                <p><?= h($notificacao->descricao) ?></p>
                                                            </div>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <div class="notification-view">
                                                    <a href="<?= echo $this->Url->build('/notificacoes/todos', true) ?>"><?= __('Ver todas notificações') ?></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <?= echo $this->Html->image($perfi->img, ['alt' => 'Esta é sua foto de perfil']) ?>
                                                <span class="admin-name"><b class=""><?php echo $user['cargo']; ?></b><?php echo $user['first_name']; ?></span>
                                                <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                <li><a href="<?= echo $this->Url->build('/user/cadastro', true) ?>">
                                                        <span class="edu-icon edu-home-admin author-log-ic"></span><?= __('Minha Conta') ?></a>
                                                </li>
                                                <li><a href="<?= echo $this->Url->build('/perfil/editar', true) ?>">
                                                        <span class="edu-icon edu-user-rounded author-log-ic"></span><?= __('Meu Perfil') ?></a>
                                                </li>
                                                <li><a href="<?= echo $this->Url->build('/faturas', true) ?>">
                                                        <span class="edu-icon edu-money author-log-ic"></span><?= __('Meu Faturamento') ?></a>
                                                </li>
                                                <li><a href="<?= echo $this->Url->build('/configuracoes', true) ?>">
                                                        <span class="edu-icon edu-settings author-log-ic"></span><?= __('Configurações') ?></a>
                                                </li>
                                                <li><a href="<?= echo $this->Url->build('/logout', true) ?>">
                                                        <span class="edu-icon edu-locked author-log-ic"></span><?= __('Sair') ?></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-menu"></i></a>

                                            <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                <ul class="nav nav-tabs custon-set-tab">
                                                    <li class="active"><a data-toggle="tab" href="#Notes"><?= __('Notas') ?></a>
                                                    </li>
                                                    <li><a data-toggle="tab" href="#Projects"><?= __('Demandas') ?></a>
                                                    </li>
                                                    <li><a data-toggle="tab" href="#Settings"><?= __('Configurações') ?></a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content custom-bdr-nt">
                                                    <div id="Notes" class="tab-pane fade in active">
                                                        <div class="notes-area-wrap">
                                                            <div class="note-heading-indicate">
                                                                <h2><i class="fa fa-comments-o"></i><?= __('Últimas Notas') ?></h2>
                                                                <p><?php if($countNotas >= 1){
                                                                            echo 'Você possui ' . $countNotas . ' novas notificações!';
                                                                        }else{
                                                                            echo "Sua caixa de notificações esta limpa!";
                                                                        }
                                                                    ?>
                                                                </p>
                                                            </div>
                                                            <div class="notes-list-area notes-menu-scrollbar">
                                                                <ul class="notes-menu-list">
                                                                    <?php foreach ($notas as $nota): ?>
                                                                    <li>
                                                                        <a href="<?= echo $this->Url->build([
                                                                            "controller" => "notas",
                                                                            "action" => "ultimos",
                                                                            $nota->id
                                                                        ]);?>">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <?= echo $this->Html->image($nota->img, ['alt' => 'Foto do Perfil do Usuário']) ?>
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p><?= h($nota->descricao) ?></p>
                                                                                    <span><?= h($nota->dataObtida) ?></span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="Projects" class="tab-pane fade">
                                                        <div class="projects-settings-wrap">
                                                            <div class="note-heading-indicate">
                                                                <h2><i class="fa fa-cube"></i><?= h('Últimas demandas') ?></h2>
                                                                <p><?php
                                                                    if($demandas->countTruncadas == 1){
                                                                        __("Você tem 1 demanda que ainda não foi concluida.");
                                                                    }
                                                                    if($demandas->countTruncadas >= 2){
                                                                        __("Você tem " . $demandas->count .  " demandas. " . $demandas->countTruncadas . " não estão completas.");
                                                                    }else{
                                                                        __("Você tem " . $demandas->count .  " demandas. Parabéns todas foram concluidas.");
                                                                }?></p>
                                                            </div>
                                                            <div class="project-st-list-area project-st-menu-scrollbar">
                                                                <ul class="projects-st-menu-list">
                                                                    <?php foreach ($demandas as $demanda): ?>
                                                                    <li>
                                                                            <script>
                                                                                /*
                                                                                var i = 1;
                                                                                var clas = 'hd-tp-';
                                                                                var remv =  clas.concat(i);

                                                                                for(i; i<=5; i++) {
                                                                                    var add = clas.concat(i);
                                                                                    var el = document.getElementById("progressoDemanda");

                                                                                }
                                                                                el.classList.remove(remv);
                                                                                el.classList.add(add);
                                                                                */
                                                                            </script>
                                                                        <a href="<?= echo $this->Url->build([
                                                                            "controller" => "demandas",
                                                                            "action" => "ultimas",
                                                                            $demanda->id
                                                                        ]);?>">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2><?= h($demanda->titulo) ?></h2>
                                                                                    <p><?= h($demanda->descricao) ?></p>
                                                                                    <span class="project-st-time"><?= h($demanda->tempoProgressivo) ?></span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p><?= h($demanda->concluidoPorcentagem) ?></p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 28%;" id="progressoDemanda" class="progress-bar progress-bar-danger hd-tp-1"></div>
                                                                                    </div>
                                                                                    <p><?= h($demanda->dataEntrega) ?></p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="Settings" class="tab-pane fade">
                                                        <div class="setting-panel-area">
                                                            <div class="note-heading-indicate">
                                                                <h2><i class="fa fa-gears"></i><?= __('Painel de configurações') ?></h2>
                                                                <p> Tem 5 ajustes que você precisa fazer.</p>
                                                            </div>
                                                            <ul class="setting-panel-list">
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2><?= __('Exibir notificações') ?></h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                                                                    <label class="onoffswitch-label" for="example">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2><?= __('Disabilitar chat') ?></h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                                                                    <label class="onoffswitch-label" for="example3">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2><?= __('Lembrar meus compromissos') ?></h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                                                                    <label class="onoffswitch-label" for="example4">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2><?= __('Trabalhar Ofline') ?></h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                                                                    <label class="onoffswitch-label" for="example7">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2><?= __('Update everyday') ?></h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example2">
                                                                                    <label class="onoffswitch-label" for="example2">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2><?= __('Sincronizar com celular') ?></h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example6">
                                                                                    <label class="onoffswitch-label" for="example6">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2><?= __('Pesquisar Offline') ?></h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example5">
                                                                                    <label class="onoffswitch-label" for="example5">
                                                                                        <span class="onoffswitch-inner"></span>
                                                                                        <span class="onoffswitch-switch"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Educafro<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="<?= echo $this->Url->build([
                                                "controller" => "*********",
                                                "action" => "*********",
                                                "fullbase" => true
                                            ]) ?>">Feed de Notícias</a></li>
                                        <li><a href="<?= echo $this->Url->build('/user/demandas', true)?>">Minhas Demandas</a></li>
                                        <li><a href="<?= echo $this->Url->build('/timeline', true)?>">Linha Temporal</a></li>
                                        <li><a href="<?= echo $this->Url->build('/analise', true)?>">Análise Técnica</a></li>
                                        <li><a href="<?= echo $this->Url->build('/insights', true)?>">Laboratório de Insights</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= echo $this->Url->build('/eventos', true)?>">Eventos</a></li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professores <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="<?= echo $this->Url->build('/professores/todos', true)?>">Todos Professores</a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/professores/novo', true)?>">Novo Professor</a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/professores/editar', true)?>">Editar Professor</a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/professores/perfil', true)?>">Perfil do Professor</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demopro" href="#">Voluntários <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demopro" class="collapse dropdown-header-top">
                                        <li><a href="<?= echo $this->Url->build('/voluntarios/todos', true)?>">Todos Voluntários</a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/voluntarios/novo', true)?>">Novo Voluntário</a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/voluntarios/editar', true)?>">Editar Voluntário</a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/voluntarios/perfil', true)?>">Perfil do Voluntário</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demopro" href="#">Alunos<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demopro" class="collapse dropdown-header-top">
                                        <li><a href="<?= echo $this->Url->build('/alunos/todos', true)?>">Todos Alunos</a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/alunos/novo', true)?>">Novo Aluno</a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/alunos/editar', true)?>">Editar Aluno</a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/alunos/perfil', true)?>">Perfil do Aluno</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Cursos<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="<?= echo $this->Url->build('/cursos/todos', true)?>">Todos os Cursos</a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/cursos/novo', true)?>">Novo Curso</a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/cursos/editar', true)?>">Editar Curso</a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/cursos/perfil', true) ?>">Ver Curso</a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/cursos/analise', true) ?>">Análise dos cursos</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Maleta de ferramentas<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="<?= echo $this->Url->build('/ferramentas/todos', true) ?>">Todas ferramentas</a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/ferramentas/novo', true) ?>">Nova ferramenta</a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/ferramentas/editar', true) ?>">Editar ferramentas</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departamentos <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="<?= echo $this->Url->build('/departamentos/todos', true) ?>">Lista de Departamentos</a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/departamentos/novo', true) ?>">Criar Departamento</a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/departamentos/editar', true) ?>">Editar Departamento</a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/departamentos/analise', true) ?>">Análise Departamental</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Caixa de Mensagens <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="<?= echo $this->Url->build('/mensagens/recentes', true) ?>">Recentes </a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/mensagens/solicitacoes', true) ?>">Solicitações de mensagens </a>
                                        </li>
                                        <li><a href="<?= echo $this->Url->build('/mensagens/grupo/novo', true) ?>">Novo Grupo </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    <form role="search" class="sr-input-func">
                                        <input type="text" placeholder="Pesquisar..." class="search-int form-control">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="<?= echo $this->Url->build('/home', true) ?>">Educafro</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Feed de Notícias</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->fetch('content') ?>
<div class="footer-copyright-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copy-right">
                    <p>Copyright © 2018. Todos os direitos reservados a <a href="https://educafro.org.br/site/">Educafro</a></p>
                    <!--<p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    //Código para verificar e/ou solcitar permissão de notificações no google chrome
    document.addEventListenner('DOMContentLoaded', function (){
        if (!Notification) {
            alert('Seu browser não tem suporte para exibir Notificações. Instale o Google Chrome.');
            return;
        }

        if (Notification.permission !== "granted")
            Notification.requestPermission();
    });

    function notificacaoUsuario(){
        if (Notification.permission !== "granted"){
            Notification.requestPermission();
        }else{
            //Variáveis para compor o corpo da notificação
            var titleNotification = "titulo da Notificação com teste de tamanho de caracteres";
            var urlIconNotification = "https://www.educafro.org.br/site/wp-content/uploads/2015/01/logo_educafro_pequeno-1.png";
            var bodyNotification = "Viado foi quem leu esse texto teste de tamanho de caracteresteste de tamanho de caracteresteste de tamanho de caracteresteste de tamanho de caracteres";
            var urlRedirectNotification = "https://www.google.com.br";

            var notificacao = new Notification(tituloNotification, {
                icon : urlIconNotification,
                body : bodyNotification
            });

            notificacao.onclick = function(){
                window.open(urlRedirectNotification);
            }
        }
    }

notificacaoUsuario();

</script>

<!-- jquery
    ============================================ -->
<?= $this->Html->script('assets/vendor/jquery-1.12.4.min.js') ?>
<!-- bootstrap JS
    ============================================ -->
<?= $this->Html->script('assets/bootstrap.min.js') ?>
<!-- wow JS
    ============================================ -->
<?= $this->Html->script('assets/wow.min.js') ?>
<!-- price-slider JS
    ============================================ -->
<?= $this->Html->script('assets/jquery-price-slider.js') ?>
<!-- meanmenu JS
    ============================================ -->
<?= $this->Html->script('assets/jquery.meanmenu.js') ?>
<!-- owl.carousel JS
    ============================================ -->
<?= $this->Html->script('assets/owl.carousel.min.js') ?>
<!-- sticky JS
    ============================================ -->
<?= $this->Html->script('assets/jquery.sticky.js') ?>
<!-- scrollUp JS
    ============================================ -->
<?= $this->Html->script('assets/jquery.scrollUp.min.js') ?>
<!-- counterup JS
    ============================================ -->
<?= $this->Html->script('assets/counterup/jquery.counterup.min.js') ?>
<?= $this->Html->script('assets/counterup/waypoints.min.js') ?>
<?= $this->Html->script('assets/counterup/counterup-active.js') ?>
<!-- mCustomScrollbar JS
    ============================================ -->
<?= $this->Html->script('assets/scrollbar/jquery.mCustomScrollbar.concat.min.js') ?>
<?= $this->Html->script('assets/scrollbar/mCustomScrollbar-active.js') ?>
<!-- metisMenu JS
    ============================================ -->
<?= $this->Html->script('assets/metisMenu/metisMenu.min.js') ?>
<?= $this->Html->script('assets/metisMenu/metisMenu-active.js') ?>
<!-- morrisjs JS
    ============================================ -->
<?= $this->Html->script('assets/morrisjs/raphael-min.js') ?>
<?= $this->Html->script('assets/morrisjs/morris.js') ?>
<?= $this->Html->script('assets/morrisjs/morris-active.js') ?>
<!-- morrisjs JS
    ============================================ -->
<?= $this->Html->script('assets/sparkline/jquery.sparkline.min.js') ?>
<?= $this->Html->script('assets/sparkline/jquery.charts-sparkline.js') ?>
<?= $this->Html->script('assets/sparkline/sparkline-active.js') ?>
<!-- calendar JS
    ============================================ -->
<?= $this->Html->script('assets/calendar/moment.min.js') ?>
<?= $this->Html->script('assets/calendar/fullcalendar.min.js') ?>
<?= $this->Html->script('assets/calendar/fullcalendar-active.js') ?>
<!-- plugins JS
    ============================================ -->
<?= $this->Html->script('assets/plugins.js') ?>
<!-- main JS
    ============================================ -->
<?= $this->Html->script('assets/main.js') ?>
<!-- tawk chat JS
    ============================================ -->
<?= $this->Html->script('assets/tawk-chat.js') ?>
</body>

</html>
