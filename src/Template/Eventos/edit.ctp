<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evento $evento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $evento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $evento->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Eventos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorizacao'), ['controller' => 'Categorizacao', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categorizacao'), ['controller' => 'Categorizacao', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eventos form large-9 medium-8 columns content">
    <?= $this->Form->create($evento) ?>
    <fieldset>
        <legend><?= __('Edit Evento') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
