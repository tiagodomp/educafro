<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposDeSuperUsuario $gruposDeSuperUsuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Grupos De Super Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Super Usuarios'), ['controller' => 'SuperUsuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Super Usuario'), ['controller' => 'SuperUsuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposDeSuperUsuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($gruposDeSuperUsuario) ?>
    <fieldset>
        <legend><?= __('Add Grupos De Super Usuario') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
