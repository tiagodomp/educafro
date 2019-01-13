<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategorizacaoInfo $categorizacaoInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Categorizacao Info'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categorizacao'), ['controller' => 'Categorizacao', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categorizacao'), ['controller' => 'Categorizacao', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categorizacaoInfo form large-9 medium-8 columns content">
    <?= $this->Form->create($categorizacaoInfo) ?>
    <fieldset>
        <legend><?= __('Add Categorizacao Info') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
