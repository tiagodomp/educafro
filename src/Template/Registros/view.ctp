<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Registro $registro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Registro'), ['action' => 'edit', $registro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Registro'), ['action' => 'delete', $registro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Registros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Registro'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="registros view large-9 medium-8 columns content">
    <h3><?= h($registro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($registro->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($registro->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($registro->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($registro->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($registro->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($registro->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($registro->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Registros') ?></h4>
        <?= $this->Text->autoParagraph(h($registro->registros)); ?>
    </div>
</div>
