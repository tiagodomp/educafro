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
//$session = $this->getRequest()->getSession();
$name = 'Olá, TESTE' //$session->read('User.name');

$this->Html->docType();
?>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Educafro Descomplica">
    <meta name="author" content="Tiago Pereira">
    
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
    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Flash->render() ?>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Educafro Descomplica</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-3">
                <li class="nav-item">
                    <?= $this->Html->link('Perfil','class'=> 'nav-link',['controller' => 'Perfis', 'action' => 'principal']) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link('Código','class'=> 'nav-link',['controller' => 'Codigos', 'action' => 'principal']) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link('Tutorial','class'=> 'nav-link',['controller' => 'Perfis', 'action' => 'tutorial']) ?>
                </li>
            </ul>
            <div class="my-2 my-lg-0 mr-4">
                <?= $this->Form->postButton('Sair', 'class'=> 'btn btn-outline-secondary my-2 my-sm-0',
                        ['controller' => 'Usuarios', 'action' => 'logout']);?>
            </div>
        </div>
    </nav>  
    <!--Renderização das exibições públicas -->
    <?= $this->fetch('content') ?>
    <footer>
    </footer>
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js') ?>
    <?= $this->Html->script('public/bootstrap.min.js') ?>
    <?= $this->Html->script('public/feather.min.js') ?>
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js') ?>
</body>
</html>