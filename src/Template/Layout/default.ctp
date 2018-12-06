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
//$session = $this->request->getSession();
//$name = $session->read('User.perfi_id.nome');
//$loggedinUser = $session()->read('Auth.User');

?>
<!DOCTYPE html>
<html>
    <?php //if($loggedinUser): ?>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
 
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-2 medium-3 columns">
            <li class="name">
                <h1><a href="">Educafro Descomplica</a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="left">
                <li><?= $this->Html->link(__('Home'), ['controller' => 'Users', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Usuários'), ['controller' => 'Users', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Perfis'), ['controller' => 'Perfis', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Códigos Ativos'), ['controller' => 'Users', 'action' => 'codeativos']) ?></li>
            </ul> 
            <ul class="right">
                <li><?= $this->Html->link(__($name), ['controller' => 'Users', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Sair'), ['controller' => 'Users', 'action' => 'add']) ?></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
