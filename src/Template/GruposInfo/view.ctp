<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposInfo $gruposInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grupos Info'), ['action' => 'edit', $gruposInfo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grupos Info'), ['action' => 'delete', $gruposInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposInfo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grupos Info'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupos Info'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gruposInfo view large-9 medium-8 columns content">
    <h3><?= h($gruposInfo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Grupo') ?></th>
            <td><?= $gruposInfo->has('grupo') ? $this->Html->link($gruposInfo->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposInfo->grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($gruposInfo->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificadore') ?></th>
            <td><?= $gruposInfo->has('modificadore') ? $this->Html->link($gruposInfo->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $gruposInfo->modificadore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($gruposInfo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($gruposInfo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($gruposInfo->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visivel') ?></th>
            <td><?= $gruposInfo->visivel ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Info') ?></h4>
        <?= $this->Text->autoParagraph(h($gruposInfo->info)); ?>
    </div>
</div>
