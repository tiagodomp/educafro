<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserHistoricoSenha $userHistoricoSenha
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Historico Senha'), ['action' => 'edit', $userHistoricoSenha->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Historico Senha'), ['action' => 'delete', $userHistoricoSenha->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userHistoricoSenha->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Historico Senha'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Historico Senha'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userHistoricoSenha view large-9 medium-8 columns content">
    <h3><?= h($userHistoricoSenha->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userHistoricoSenha->has('user') ? $this->Html->link($userHistoricoSenha->user->id, ['controller' => 'User', 'action' => 'view', $userHistoricoSenha->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Senhas') ?></th>
            <td><?= h($userHistoricoSenha->senhas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userHistoricoSenha->id) ?></td>
        </tr>
    </table>
</div>
