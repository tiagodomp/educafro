<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grupo $grupo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grupo'), ['action' => 'edit', $grupo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grupo'), ['action' => 'delete', $grupo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grupo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="grupos view large-9 medium-8 columns content">
    <h3><?= h($grupo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($grupo->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adm Grupo') ?></th>
            <td><?= h($grupo->adm_grupo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Picture') ?></th>
            <td><?= h($grupo->picture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($grupo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($grupo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($grupo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($grupo->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $grupo->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Objetivo') ?></h4>
        <?= $this->Text->autoParagraph(h($grupo->objetivo)); ?>
    </div>
</div>
