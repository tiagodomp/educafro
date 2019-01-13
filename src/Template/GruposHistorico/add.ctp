<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposHistorico $gruposHistorico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Grupos Historico'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Log'), ['controller' => 'Log', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Log'), ['controller' => 'Log', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposHistorico form large-9 medium-8 columns content">
    <?= $this->Form->create($gruposHistorico) ?>
    <fieldset>
        <legend><?= __('Add Grupos Historico') ?></legend>
        <?php
            echo $this->Form->control('ultima_data_iniciada', ['empty' => true]);
            echo $this->Form->control('ultima_data_finalizada', ['empty' => true]);
            echo $this->Form->control('ultimo_status');
            echo $this->Form->control('historico');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
