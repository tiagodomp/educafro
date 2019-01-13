<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categorizacao $categorizacao
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $categorizacao->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $categorizacao->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Categorizacao'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categorizacao Info'), ['controller' => 'CategorizacaoInfo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categorizacao Info'), ['controller' => 'CategorizacaoInfo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categorizacao form large-9 medium-8 columns content">
    <?= $this->Form->create($categorizacao) ?>
    <fieldset>
        <legend><?= __('Edit Categorizacao') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
