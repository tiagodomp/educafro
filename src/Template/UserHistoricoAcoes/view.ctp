<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserHistoricoAco $userHistoricoAco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Historico Aco'), ['action' => 'edit', $userHistoricoAco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Historico Aco'), ['action' => 'delete', $userHistoricoAco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userHistoricoAco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Historico Acoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Historico Aco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Log'), ['controller' => 'Log', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Log'), ['controller' => 'Log', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userHistoricoAcoes view large-9 medium-8 columns content">
    <h3><?= h($userHistoricoAco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userHistoricoAco->has('user') ? $this->Html->link($userHistoricoAco->user->id, ['controller' => 'User', 'action' => 'view', $userHistoricoAco->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Log') ?></th>
            <td><?= $userHistoricoAco->has('log') ? $this->Html->link($userHistoricoAco->log->id, ['controller' => 'Log', 'action' => 'view', $userHistoricoAco->log->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acoes') ?></th>
            <td><?= h($userHistoricoAco->acoes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acessos') ?></th>
            <td><?= h($userHistoricoAco->acessos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uploads') ?></th>
            <td><?= h($userHistoricoAco->uploads) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userHistoricoAco->id) ?></td>
        </tr>
    </table>
</div>
