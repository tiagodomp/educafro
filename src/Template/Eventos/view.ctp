<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evento $evento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evento'), ['action' => 'edit', $evento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evento'), ['action' => 'delete', $evento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Eventos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorizacao'), ['controller' => 'Categorizacao', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorizacao'), ['controller' => 'Categorizacao', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="eventos view large-9 medium-8 columns content">
    <h3><?= h($evento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Modificadore') ?></th>
            <td><?= $evento->has('modificadore') ? $this->Html->link($evento->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $evento->modificadore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categorizacao') ?></th>
            <td><?= $evento->has('categorizacao') ? $this->Html->link($evento->categorizacao->id, ['controller' => 'Categorizacao', 'action' => 'view', $evento->categorizacao->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($evento->id) ?></td>
        </tr>
    </table>
</div>
