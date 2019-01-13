<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAtribuico $userAtribuico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Atribuico'), ['action' => 'edit', $userAtribuico->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Atribuico'), ['action' => 'delete', $userAtribuico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAtribuico->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Atribuicoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Atribuico'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userAtribuicoes view large-9 medium-8 columns content">
    <h3><?= h($userAtribuico->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userAtribuico->has('user') ? $this->Html->link($userAtribuico->user->id, ['controller' => 'User', 'action' => 'view', $userAtribuico->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acao') ?></th>
            <td><?= h($userAtribuico->acao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($userAtribuico->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Evento') ?></th>
            <td><?= $userAtribuico->has('evento') ? $this->Html->link($userAtribuico->evento->id, ['controller' => 'Eventos', 'action' => 'view', $userAtribuico->evento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info') ?></th>
            <td><?= h($userAtribuico->info) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userAtribuico->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userAtribuico->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($userAtribuico->modified) ?></td>
        </tr>
    </table>
</div>
