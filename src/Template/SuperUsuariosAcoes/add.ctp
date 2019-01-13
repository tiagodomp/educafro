<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SuperUsuariosAco $superUsuariosAco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Super Usuarios Acoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Super Usuarios'), ['controller' => 'SuperUsuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Super Usuario'), ['controller' => 'SuperUsuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="superUsuariosAcoes form large-9 medium-8 columns content">
    <?= $this->Form->create($superUsuariosAco) ?>
    <fieldset>
        <legend><?= __('Add Super Usuarios Aco') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
