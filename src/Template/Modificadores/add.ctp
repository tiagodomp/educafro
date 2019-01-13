<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Modificadore $modificadore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User Historico Acoes'), ['controller' => 'UserHistoricoAcoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Historico Aco'), ['controller' => 'UserHistoricoAcoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modificadores form large-9 medium-8 columns content">
    <?= $this->Form->create($modificadore) ?>
    <fieldset>
        <legend><?= __('Add Modificadore') ?></legend>
        <?php
            echo $this->Form->control('rastreador_rotas');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
