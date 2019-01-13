<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdministradoresAco $administradoresAco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Administradores Acoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Administradores'), ['controller' => 'Administradores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Administradore'), ['controller' => 'Administradores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="administradoresAcoes form large-9 medium-8 columns content">
    <?= $this->Form->create($administradoresAco) ?>
    <fieldset>
        <legend><?= __('Add Administradores Aco') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
