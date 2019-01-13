<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserInscrico $userInscrico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Inscrico'), ['action' => 'edit', $userInscrico->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Inscrico'), ['action' => 'delete', $userInscrico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userInscrico->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Inscricoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Inscrico'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userInscricoes view large-9 medium-8 columns content">
    <h3><?= h($userInscrico->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userInscrico->has('user') ? $this->Html->link($userInscrico->user->id, ['controller' => 'User', 'action' => 'view', $userInscrico->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inscricoes') ?></th>
            <td><?= h($userInscrico->inscricoes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userInscrico->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Autorizado') ?></th>
            <td><?= $userInscrico->autorizado ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
