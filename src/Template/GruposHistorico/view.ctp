<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposHistorico $gruposHistorico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grupos Historico'), ['action' => 'edit', $gruposHistorico->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grupos Historico'), ['action' => 'delete', $gruposHistorico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposHistorico->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grupos Historico'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupos Historico'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Log'), ['controller' => 'Log', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Log'), ['controller' => 'Log', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gruposHistorico view large-9 medium-8 columns content">
    <h3><?= h($gruposHistorico->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Log') ?></th>
            <td><?= $gruposHistorico->has('log') ? $this->Html->link($gruposHistorico->log->id, ['controller' => 'Log', 'action' => 'view', $gruposHistorico->log->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grupo') ?></th>
            <td><?= $gruposHistorico->has('grupo') ? $this->Html->link($gruposHistorico->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposHistorico->grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ultimo Status') ?></th>
            <td><?= h($gruposHistorico->ultimo_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Historico') ?></th>
            <td><?= h($gruposHistorico->historico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($gruposHistorico->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ultima Data Iniciada') ?></th>
            <td><?= h($gruposHistorico->ultima_data_iniciada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ultima Data Finalizada') ?></th>
            <td><?= h($gruposHistorico->ultima_data_finalizada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($gruposHistorico->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($gruposHistorico->modified) ?></td>
        </tr>
    </table>
</div>
