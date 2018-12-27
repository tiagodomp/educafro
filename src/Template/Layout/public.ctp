<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Educafro Descomplica';
$session = $this->request->getSession();
$perfil = $session->read('Auth.User');

?>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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


    
    <?= $this->Html->css([  'public/bootstrap.min.css', 
                            'public/bootstrap-grid.min.css',
                            'public/bootstrap-reboot.min.css',
                            'public/floating-labels.css',  
                            'public/perfil.css'
                        ]); ?>
    

</head>
<body>
    <?= $this->Flash->render() ?>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Educafro Descomplica</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-3">
                <li class="nav-item mx-4 ">
                    <?= $this->Html->link('Perfil',['class' => 'nav-link'],['controller' => 'Perfis', 'action' => 'perfil']) ?>
                </li>
                <li class="nav-item mx-4">
                    <?= $this->Html->link('Código',['class'=> 'nav-link'],['controller' => 'User', 'action' => 'redirecionar']) ?>
                </li>
                
                <li class="nav-item mx-4">
                    <?= $this->Html->link('Tutorial',['class'=> 'nav-link'],['controller' => 'Perfis', 'action' => 'tutorial']) ?>
                </li>
            </ul>
            <div class="my-2 my-lg-0 mr-4">
                <a href="<?php echo $this->Url->build('/logout', true) ?>">
                <button type="button" class="btn btn-outline-secondary my-2 my-sm-0" >Sair</button>
                </a>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <section class="container">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">

                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <div class="ml-4">
                                    <?=  $this->Html->image( 'public/Educafro perfil aluno.png', ['alt' => 'Foto Perfil do usuário " $perfil["username"]"',  'width' => '180', 'height'=> '180', 'class' => 'rounded-circle' ]) ?>
                                    <!--<img src="img/Educafro perfil aluno.png" alt="Foto Perfil Educafro" width="180" height="180" class="rounded-circle"/> -->
                                </div>
                            </li>
                            <p class="text-muted text-center mt-3">
                                Seja bem vindo, <?php echo $perfil['username']; ?> !
                            </p>

                            <hr class="text-muted mx-4">
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                    Página Inicial
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                                    Obter Cupom
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    Minhas Provas
                                </a>
                            </li>
                        </ul>

                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-5 text-muted fixed-bottom">
                            <a class="d-flex align-items-center text-muted" href="#">
                                <span class="mr-3">Queremos sua Opinião</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="16"></line>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                            </a>
                        </h6>

                    </div>
                </nav>
            </section>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <!--Renderização das exibições públicas -->
                <?= $this->fetch('content') ?>
            </main>
        </div>
    </div
    
    
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js') ?>
    <?= $this->Html->script('public/bootstrap.min.js') ?>
    <?= $this->Html->script('public/feather.min.js') ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    
</body>
</html>