<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CodigosTag $codigosTag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Codigos Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="codigosTags form large-9 medium-8 columns content">
    <?= $this->Form->create($codigosTag) ?>
    <fieldset>
        <legend><?= __('Add Codigos Tag') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('abreviatura');
            echo $this->Form->control('pertencentes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
