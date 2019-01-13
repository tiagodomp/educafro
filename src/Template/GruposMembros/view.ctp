<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposMembro $gruposMembro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grupos Membro'), ['action' => 'edit', $gruposMembro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grupos Membro'), ['action' => 'delete', $gruposMembro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposMembro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grupos Membros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupos Membro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gruposMembros view large-9 medium-8 columns content">
    <h3><?= h($gruposMembro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Grupo') ?></th>
            <td><?= $gruposMembro->has('grupo') ? $this->Html->link($gruposMembro->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposMembro->grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Membros') ?></th>
            <td><?= h($gruposMembro->membros) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Path') ?></th>
            <td><?= h($gruposMembro->path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($gruposMembro->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($gruposMembro->created) ?></td>
        </tr>
    </table>
</div>
