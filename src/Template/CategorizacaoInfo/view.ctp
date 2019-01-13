<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategorizacaoInfo $categorizacaoInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categorizacao Info'), ['action' => 'edit', $categorizacaoInfo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categorizacao Info'), ['action' => 'delete', $categorizacaoInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorizacaoInfo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categorizacao Info'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorizacao Info'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorizacao'), ['controller' => 'Categorizacao', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorizacao'), ['controller' => 'Categorizacao', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categorizacaoInfo view large-9 medium-8 columns content">
    <h3><?= h($categorizacaoInfo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Categorizacao') ?></th>
            <td><?= $categorizacaoInfo->has('categorizacao') ? $this->Html->link($categorizacaoInfo->categorizacao->id, ['controller' => 'Categorizacao', 'action' => 'view', $categorizacaoInfo->categorizacao->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categorizacaoInfo->id) ?></td>
        </tr>
    </table>
</div>
