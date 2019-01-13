<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Regra $regra
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Regras'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regras Hierarquias'), ['controller' => 'RegrasHierarquias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Regras Hierarquia'), ['controller' => 'RegrasHierarquias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="regras form large-9 medium-8 columns content">
    <?= $this->Form->create($regra) ?>
    <fieldset>
        <legend><?= __('Add Regra') ?></legend>
        <?php
            echo $this->Form->control('cargo');
            echo $this->Form->control('status');
            echo $this->Form->control('descricao');
            echo $this->Form->control('info');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
