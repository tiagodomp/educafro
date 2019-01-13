<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserPreferencia $userPreferencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Preferencia'), ['action' => 'edit', $userPreferencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Preferencia'), ['action' => 'delete', $userPreferencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userPreferencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Preferencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Preferencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userPreferencias view large-9 medium-8 columns content">
    <h3><?= h($userPreferencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userPreferencia->has('user') ? $this->Html->link($userPreferencia->user->id, ['controller' => 'User', 'action' => 'view', $userPreferencia->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Configuracoes') ?></th>
            <td><?= h($userPreferencia->configuracoes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Temas') ?></th>
            <td><?= h($userPreferencia->temas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plugins') ?></th>
            <td><?= h($userPreferencia->plugins) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Temporarios') ?></th>
            <td><?= h($userPreferencia->temporarios) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userPreferencia->id) ?></td>
        </tr>
    </table>
</div>
