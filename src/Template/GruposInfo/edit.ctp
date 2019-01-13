<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposInfo $gruposInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gruposInfo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gruposInfo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Grupos Info'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposInfo form large-9 medium-8 columns content">
    <?= $this->Form->create($gruposInfo) ?>
    <fieldset>
        <legend><?= __('Edit Grupos Info') ?></legend>
        <?php
            echo $this->Form->control('tipo');
            echo $this->Form->control('visivel');
            echo $this->Form->control('info');
            echo $this->Form->control('modificadores_id', ['options' => $modificadores, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
