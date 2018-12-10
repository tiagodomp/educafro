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
                        <a class="has-arrow" href="index.html">
                            <span class="educate-icon educate-home icon-wrap"></span>
                            <span class="mini-click-non">Educafro</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Feed Noticias" href="<?= echo $this->Url->build([
                                                                    "controller" => "*********",
                                                                    "action" => "*********",
                                                                    "fullbase" => true
                                                                ]) ?>">
                                    <span class="mini-sub-pro">Feed de Notícias</span>
                                </a>
                            </li>

                            <li><a title="Minhas Demandas" href="<?= echo $this->Url->build('/user/demandas', true);?>">
                                    <span class="mini-sub-pro">Minhas Demandas</span> <!-- saida: http://dominio.com/user/demandas -->
                                </a>
                            </li>

                            <li><a title="pesquisa recursiva” href="<?= echo $this->Url->build('/pesquisa/recursiva', true);?>">
                                <span class="mini-sub-pro">Pesquisa recursiva</span>
                                </a>
                            </li>

                            <li><a title="Análise técnica” href="<?= echo $this->Url->build('/analise', true);?>">
                                <span class="mini-sub-pro">Análise Técnica</span>
                                </a>
                            </li>
                            <li><a title="laboratório de Insights" href="<?= echo $this->Url->build('/insights', true);?>">
                                    <span class="mini-sub-pro">Laboratório de Insights</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a title="Landing Page" href="<?= echo $this->Url->build('/eventos', true);?>" aria-expanded="false">
                            <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                            <span class="mini-click-non">Eventos</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?= echo $this->Url->build('/professores', true);?>" aria-expanded="false">
                            <span class="educate-icon educate-professor icon-wrap"></span>
                            <span class="mini-click-non">Professores</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Todos profesores" href="<?= echo $this->Url->build('/professores/todos', true);?>">
                                    <span class="mini-sub-pro">Todos Professores</span>
                                </a>
                            </li>
                            <li><a title="Novo Professor" href="<?= echo $this->Url->build('/professores/novo', true);?>">
                                    <span class="mini-sub-pro">Novo Professor</span>
                                </a>
                            </li>
                            <li><a title="Editar Professor" href="<?= echo $this->Url->build('/professores/editar', true);?>">
                                    <span class="mini-sub-pro">Editar Professor</span>
                                </a>
                            </li>
                            <li><a title="Perfil do Professor" href="<?= echo $this->Url->build('/professores/perfil', true);?>">
                                    <span class="mini-sub-pro">Perfil do Professor</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?= echo $this->Url->build('/voluntarios', true);?>" aria-expanded="false">
                            <span class="educate-icon educate-professor icon-wrap"></span>
                            <span class="mini-click-non">Voluntários</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Todos Voluntários" href="<?= echo $this->Url->build('/voluntarios/todos', true);?>">
                                    <span class="mini-sub-pro">Todos Voluntários</span>
                                </a>
                            </li>
                            <li><a title="Novo Voluntário" href="<?= echo $this->Url->build('/voluntarios/novo', true);?>">
                                    <span class="mini-sub-pro">Novo Voluntário</span>
                                </a>
                            </li>
                            <li><a title="Editar Voluntários" href="<?= echo $this->Url->build('/voluntarios/editar', true);?>">
                                    <span class="mini-sub-pro">Editar Voluntários</span>
                                </a>
                            </li>
                            <li><a title="Perfil dos Voluntários" href="<?= echo $this->Url->build('/voluntarios/perfil', true);?>">
                                    <span class="mini-sub-pro">Perfil do Voluntário</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?= echo $this->Url->build('/alunos', true);?>" aria-expanded="false">
                            <span class="educate-icon educate-student icon-wrap"></span>
                            <span class="mini-click-non">Alunos</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Todos Alunos" href="<?= echo $this->Url->build('/alunos/todos', true);?>">
                                    <span class="mini-sub-pro">Todos Alunos</span>
                                </a>
                            </li>
                            <li><a title="Novo Aluno" href="<?= echo $this->Url->build('/alunos/novo', true);?>">
                                    <span class="mini-sub-pro">Novo Aluno</span>
                                </a>
                            </li>
                            <li><a title="Editar Aluno" href="<?= echo $this->Url->build('/alunos/editar', true);?>">
                                    <span class="mini-sub-pro">Editar Aluno</span>
                                </a>
                            </li>
                            <li><a title="Perfil do Aluno" href="<?= echo $this->Url->build('/alunos/perfil', true);?>">
                                    <span class="mini-sub-pro">Perfil do Aluno</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?= echo $this->Url->build('/cursos', true);?>" aria-expanded="false">
                            <span class="educate-icon educate-course icon-wrap"></span>
                            <span class="mini-click-non">Cursos</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Todos os cursos" href="<?= echo $this->Url->build('/cursos/todos', true);?>">
                                    <span class="mini-sub-pro">Todos os cursos</span>
                                </a>
                            </li>
                            <li><a title="Novo Curso" href="<?= echo $this->Url->build('/cursos/novo', true);?>">
                                    <span class="mini-sub-pro">Novo curso</span>
                                </a>
                            </li>
                            <li><a title="Editar Curso" href="<?= echo $this->Url->build('/cursos/editar', true);?>">
                                    <span class="mini-sub-pro">Editar curso</span>
                                </a>
                            </li>
                            <li><a title="Ver Curso" href="<?= echo $this->Url->build('/cursos/ver', true);?>">
                                    <span class="mini-sub-pro">Ver curso</span>
                                </a>
                            </li>
                            <li><a title="Product Payment" href="<?= echo $this->Url->build('/cursos/analise', true);?>">
                                    <span class="mini-sub-pro">Análise dos cursos</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?= echo $this->Url->build('/ferramentas', true);?>" aria-expanded="false">
                            <span class="educate-icon educate-library icon-wrap"></span>
                            <span class="mini-click-non">Maleta de Ferramentas</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Todas as ferramentas" href="<?= echo $this->Url->build('/ferramentas/todas', true);?>">
                                    <span class="mini-sub-pro">Todas as ferramentas</span>
                                </a>
                            </li>
                            <li><a title="Nova Ferramenta" href="add-library-assets.html"><span class="mini-sub-pro">Nova Ferramenta</span></a></li>
                            <li><a title="Editar Ferramentas" href="edit-library-assets.html"><span class="mini-sub-pro">Editar Ferramentas</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Departamentos</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Lista de Departamentos" href="departments.html"><span class="mini-sub-pro">Lista de Departamentos</span></a></li>
                            <li><a title="Criar Departamento" href="add-department.html"><span class="mini-sub-pro">Criar Departamento</span></a></li>
                            <li><a title="Editar Departamentos" href="edit-department.html"><span class="mini-sub-pro">Editar Departamento</span></a></li>
                            <li><a title="Análise Departamental" href="edit-department.html"><span class="mini-sub-pro">Análise Departamental</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">Caixa de Mensagens</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Recentes" href="mailbox.html"><span class="mini-sub-pro">Recentes</span></a></li>
                            <li><a title="Solicitações de mensagens" href="mailbox-view.html"><span class="mini-sub-pro">Solicitações de Mensagens</span></a></li>
                            <li><a title="Novo Grupo" href="mailbox-compose.html"><span class="mini-sub-pro">Novo Grupo</span></a></li>
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
                    <a href="index.html"><img class="main-logo" src="img/assets/logo/logo-educafro-horizontal-200x60px.png" alt="logo educafro horizontal 200x60px" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="logo-pro">
                <a href="index.html"><img class="main-logo" src="img/assets/logo/logo-educafro-horizontal-200x60px.png" alt="logo educafro horizontal 200x60px" /></a>
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
                                        <li class="nav-item"><a href="#" class="nav-link">Início</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">About</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                        </li>
                                        <li class="nav-item dropdown res-dis-nn">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Demandas<span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                            <div role="menu" class="dropdown-menu animated zoomIn">
                                                <a href="#" class="dropdown-item">Minhas Demandas</a>
                                                <a href="#" class="dropdown-item">Demandas em desenvolvimento</a>
                                                <a href="#" class="dropdown-item">Contibruir em alguma demanda</a>
                                                <a href="#" class="dropdown-item">Todas demandas públicas</a>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Suporte</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item dropdown">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                            <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                <div class="message-single-top">
                                                    <h1>Mensagem</h1>
                                                </div>
                                                <ul class="message-menu">
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="img/assets/contact/1.jpg" alt="Foto do Perfil do Usuário">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Advanda Cro</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="img/assets/contact/4.jpg" alt="">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Sulaiman din</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="img/assets/contact/3.jpg" alt="">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="img/assets/contact/2.jpg" alt="">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="message-view">
                                                    <a href="#">Ver todas mensagens </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                            <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                <div class="notification-single-top">
                                                    <h1>Notificações</h1>
                                                </div>
                                                <ul class="notification-menu">
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Advanda Cro</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Sulaiman din</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="notification-view">
                                                    <a href="#">Ver todas notificações</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <img src="img/assets/product/pro4.jpg" alt="" />
                                                <span class="admin-name"><b class="">Prof.</b> Angelina</span>
                                                <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>Minha Conta</a>
                                                </li>
                                                <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>Meu Perfil</a>
                                                </li>
                                                <li><a href="#"><span class="edu-icon edu-money author-log-ic"></span>Meu Faturamento</a>
                                                </li>
                                                <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Configurações</a>
                                                </li>
                                                <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Sair</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-menu"></i></a>

                                            <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                <ul class="nav nav-tabs custon-set-tab">
                                                    <li class="active"><a data-toggle="tab" href="#Notes">Notas</a>
                                                    </li>
                                                    <li><a data-toggle="tab" href="#Projects">Demandas</a>
                                                    </li>
                                                    <li><a data-toggle="tab" href="#Settings">Configurações</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content custom-bdr-nt">
                                                    <div id="Notes" class="tab-pane fade in active">
                                                        <div class="notes-area-wrap">
                                                            <div class="note-heading-indicate">
                                                                <h2><i class="fa fa-comments-o"></i>Últimas Notas</h2>
                                                                <p>Você tem 10 novas mensagens</p>
                                                            </div>
                                                            <div class="notes-list-area notes-menu-scrollbar">
                                                                <ul class="notes-menu-list">
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/assets/contact/4.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/assets/contact/1.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/assets/contact/2.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/assets/contact/3.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/assets/contact/4.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/assets/contact/1.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/assets/contact/2.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/assets/contact/1.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/assets/contact/2.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/assets/contact/3.jpg" alt="" />
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="Projects" class="tab-pane fade">
                                                        <div class="projects-settings-wrap">
                                                            <div class="note-heading-indicate">
                                                                <h2><i class="fa fa-cube"></i>Últimas demandas</h2>
                                                                <p> Você tem 20 demandas. 5 não estão completas.</p>
                                                            </div>
                                                            <div class="project-st-list-area project-st-menu-scrollbar">
                                                                <ul class="projects-st-menu-list">
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Web Development</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">1 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 28%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 28%;" class="progress-bar progress-bar-danger hd-tp-1"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Software Development</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">2 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl">
                                                                                    <p>Completion with: 68%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 68%;" class="progress-bar hd-tp-2"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Graphic Design</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">3 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 78%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 78%;" class="progress-bar hd-tp-3"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Web Design</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">4 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl2">
                                                                                    <p>Completion with: 38%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 38%;" class="progress-bar progress-bar-danger hd-tp-4"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Business Card</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">5 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 28%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 28%;" class="progress-bar progress-bar-danger hd-tp-5"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Ecommerce Business</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">6 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl">
                                                                                    <p>Completion with: 68%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 68%;" class="progress-bar hd-tp-6"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Woocommerce Plugin</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">7 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 78%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 78%;" class="progress-bar"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Wordpress Theme</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">9 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl2">
                                                                                    <p>Completion with: 38%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="Settings" class="tab-pane fade">
                                                        <div class="setting-panel-area">
                                                            <div class="note-heading-indicate">
                                                                <h2><i class="fa fa-gears"></i>Painel de configurações</h2>
                                                                <p> Tem 5 ajustes que você precisa fazer.</p>
                                                            </div>
                                                            <ul class="setting-panel-list">
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Show notifications</h2>
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
                                                                            <h2>Disable Chat</h2>
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
                                                                            <h2>Enable history</h2>
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
                                                                            <h2>Show charts</h2>
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
                                                                            <h2>Update everyday</h2>
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
                                                                            <h2>Global search</h2>
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
                                                                            <h2>Offline users</h2>
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
                                        <li><a href="index.html">Feed de Notícias</a></li>
                                        <li><a href="index-1.html">Minhas Demandas</a></li>
                                        <li><a href="index-3.html">Pesquisa Recursiva</a></li>
                                        <li><a href="analytics.html">Análise Técnica</a></li>
                                        <li><a href="widgets.html">Laboratório de Insights</a></li>
                                    </ul>
                                </li>
                                <li><a href="events.html">Eventos</a></li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professores <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="all-professors.html">Todos Professores</a>
                                        </li>
                                        <li><a href="add-professor.html">Novo Professor</a>
                                        </li>
                                        <li><a href="edit-professor.html">Editar Professor</a>
                                        </li>
                                        <li><a href="professor-profile.html">Perfil do Professor</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demopro" href="#">Voluntários <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demopro" class="collapse dropdown-header-top">
                                        <li><a href="all-students.html">Todos Voluntários</a>
                                        </li>
                                        <li><a href="add-student.html">Novo Voluntário</a>
                                        </li>
                                        <li><a href="edit-student.html">Editar Voluntário</a>
                                        </li>
                                        <li><a href="student-profile.html">Perfil do Voluntário</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demopro" href="#">Alunos<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demopro" class="collapse dropdown-header-top">
                                        <li><a href="all-students.html">Todos Alunos</a>
                                        </li>
                                        <li><a href="add-student.html">Novo Aluno</a>
                                        </li>
                                        <li><a href="edit-student.html">Editar Aluno</a>
                                        </li>
                                        <li><a href="student-profile.html">Perfil do Aluno</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Cursos<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="all-courses.html">Todos os Cursos</a>
                                        </li>
                                        <li><a href="add-course.html">Novo Curso</a>
                                        </li>
                                        <li><a href="edit-course.html">Editar Curso</a>
                                        </li>
                                        <li><a href="course-profile.html">Ver Curso</a>
                                        </li>
                                        <li><a href="course-payment.html">Análise dos cursos</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="library-assets.html">Library Assets</a>
                                        </li>
                                        <li><a href="add-library-assets.html">Add Library Asset</a>
                                        </li>
                                        <li><a href="edit-library-assets.html">Edit Library Asset</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departamentos <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="departments.html">Lista de Departamentos</a>
                                        </li>
                                        <li><a href="add-department.html">Criar Departamento</a>
                                        </li>
                                        <li><a href="edit-department.html">Editar Departamento</a>
                                        </li>
                                        <li><a href="edit-department.html">Análise Departamental</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Caixa de Mensagens <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="mailbox.html">Recentes </a>
                                        </li>
                                        <li><a href="mailbox-view.html">Solicitações de mensagens </a>
                                        </li>
                                        <li><a href="mailbox-compose.html">Novo Grupo </a>
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
                                    <li><a href="#">Educafro</a> <span class="bread-slash">/</span>
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
