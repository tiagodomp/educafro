<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SuperUsuariosToken $superUsuariosToken
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Super Usuarios Token'), ['action' => 'edit', $superUsuariosToken->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Super Usuarios Token'), ['action' => 'delete', $superUsuariosToken->id], ['confirm' => __('Are you sure you want to delete # {0}?', $superUsuariosToken->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Super Usuarios Token'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Super Usuarios Token'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Super Usuarios'), ['controller' => 'SuperUsuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Super Usuario'), ['controller' => 'SuperUsuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="superUsuariosToken view large-9 medium-8 columns content">
    <h3><?= h($superUsuariosToken->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Token') ?></th>
            <td><?= h($superUsuariosToken->token) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instancia') ?></th>
            <td><?= h($superUsuariosToken->instancia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ip Restricao') ?></th>
            <td><?= h($superUsuariosToken->ip_restricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Super Usuario') ?></th>
            <td><?= $superUsuariosToken->has('super_usuario') ? $this->Html->link($superUsuariosToken->super_usuario->id, ['controller' => 'SuperUsuarios', 'action' => 'view', $superUsuariosToken->super_usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($superUsuariosToken->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($superUsuariosToken->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($superUsuariosToken->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Info') ?></h4>
        <?= $this->Text->autoParagraph(h($superUsuariosToken->info)); ?>
    </div>
</div>
