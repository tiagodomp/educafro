<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdministradoresToken $administradoresToken
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Administradores Token'), ['action' => 'edit', $administradoresToken->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Administradores Token'), ['action' => 'delete', $administradoresToken->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administradoresToken->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Administradores Tokens'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Administradores Token'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Administradores'), ['controller' => 'Administradores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Administradore'), ['controller' => 'Administradores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="administradoresTokens view large-9 medium-8 columns content">
    <h3><?= h($administradoresToken->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Administradore') ?></th>
            <td><?= $administradoresToken->has('administradore') ? $this->Html->link($administradoresToken->administradore->id, ['controller' => 'Administradores', 'action' => 'view', $administradoresToken->administradore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Token') ?></th>
            <td><?= h($administradoresToken->token) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instancia') ?></th>
            <td><?= h($administradoresToken->instancia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ip Restricao') ?></th>
            <td><?= h($administradoresToken->ip_restricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($administradoresToken->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($administradoresToken->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($administradoresToken->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Info') ?></h4>
        <?= $this->Text->autoParagraph(h($administradoresToken->info)); ?>
    </div>
</div>
