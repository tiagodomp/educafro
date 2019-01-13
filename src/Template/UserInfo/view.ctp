<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserInfo $userInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Info'), ['action' => 'edit', $userInfo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Info'), ['action' => 'delete', $userInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userInfo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Info'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Info'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userInfo view large-9 medium-8 columns content">
    <h3><?= h($userInfo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userInfo->has('user') ? $this->Html->link($userInfo->user->id, ['controller' => 'User', 'action' => 'view', $userInfo->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info Pessoal') ?></th>
            <td><?= h($userInfo->info_pessoal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info Sistema') ?></th>
            <td><?= h($userInfo->info_sistema) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userInfo->id) ?></td>
        </tr>
    </table>
</div>
