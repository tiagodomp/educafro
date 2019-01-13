<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CodigosTag $codigosTag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Codigos Tag'), ['action' => 'edit', $codigosTag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Codigos Tag'), ['action' => 'delete', $codigosTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $codigosTag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Codigos Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Codigos Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="codigosTags view large-9 medium-8 columns content">
    <h3><?= h($codigosTag->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Modificadore') ?></th>
            <td><?= $codigosTag->has('modificadore') ? $this->Html->link($codigosTag->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $codigosTag->modificadore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($codigosTag->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Abreviatura') ?></th>
            <td><?= h($codigosTag->abreviatura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pertencentes') ?></th>
            <td><?= h($codigosTag->pertencentes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($codigosTag->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($codigosTag->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($codigosTag->modified) ?></td>
        </tr>
    </table>
</div>
