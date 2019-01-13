<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CodigosInfo $codigosInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Codigos Info'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Codigos'), ['controller' => 'Codigos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Codigo'), ['controller' => 'Codigos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="codigosInfo form large-9 medium-8 columns content">
    <?= $this->Form->create($codigosInfo) ?>
    <fieldset>
        <legend><?= __('Add Codigos Info') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('titulo');
            echo $this->Form->control('descricao');
            echo $this->Form->control('img');
            echo $this->Form->control('beneficios');
            echo $this->Form->control('publico_alvo');
            echo $this->Form->control('como_obter');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
