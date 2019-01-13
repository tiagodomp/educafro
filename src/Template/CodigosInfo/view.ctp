<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CodigosInfo $codigosInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Codigos Info'), ['action' => 'edit', $codigosInfo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Codigos Info'), ['action' => 'delete', $codigosInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $codigosInfo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Codigos Info'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Codigos Info'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Codigos'), ['controller' => 'Codigos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Codigo'), ['controller' => 'Codigos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="codigosInfo view large-9 medium-8 columns content">
    <h3><?= h($codigosInfo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= $codigosInfo->has('codigo') ? $this->Html->link($codigosInfo->codigo->id, ['controller' => 'Codigos', 'action' => 'view', $codigosInfo->codigo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificadore') ?></th>
            <td><?= $codigosInfo->has('modificadore') ? $this->Html->link($codigosInfo->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $codigosInfo->modificadore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($codigosInfo->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($codigosInfo->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($codigosInfo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img') ?></th>
            <td><?= h($codigosInfo->img) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Beneficios') ?></th>
            <td><?= h($codigosInfo->beneficios) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publico Alvo') ?></th>
            <td><?= h($codigosInfo->publico_alvo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Como Obter') ?></th>
            <td><?= h($codigosInfo->como_obter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($codigosInfo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($codigosInfo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($codigosInfo->modified) ?></td>
        </tr>
    </table>
</div>
