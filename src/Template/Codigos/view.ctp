<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Codigo $codigo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Codigo'), ['action' => 'edit', $codigo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Codigo'), ['action' => 'delete', $codigo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $codigo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Codigos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Codigo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Codigos Tags'), ['controller' => 'CodigosTags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Codigos Tag'), ['controller' => 'CodigosTags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="codigos view large-9 medium-8 columns content">
    <h3><?= h($codigo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Codigos Tag') ?></th>
            <td><?= $codigo->has('codigos_tag') ? $this->Html->link($codigo->codigos_tag->id, ['controller' => 'CodigosTags', 'action' => 'view', $codigo->codigos_tag->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= h($codigo->codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativacao') ?></th>
            <td><?= h($codigo->ativacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($codigo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($codigo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($codigo->modified) ?></td>
        </tr>
    </table>
</div>
