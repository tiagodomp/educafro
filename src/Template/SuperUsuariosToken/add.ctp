<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SuperUsuariosToken $superUsuariosToken
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Super Usuarios Token'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Super Usuarios'), ['controller' => 'SuperUsuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Super Usuario'), ['controller' => 'SuperUsuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="superUsuariosToken form large-9 medium-8 columns content">
    <?= $this->Form->create($superUsuariosToken) ?>
    <fieldset>
        <legend><?= __('Add Super Usuarios Token') ?></legend>
        <?php
            echo $this->Form->control('token');
            echo $this->Form->control('instancia');
            echo $this->Form->control('ip_restricao');
            echo $this->Form->control('info');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
