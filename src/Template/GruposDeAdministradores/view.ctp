<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposDeAdministradore $gruposDeAdministradore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grupos De Administradore'), ['action' => 'edit', $gruposDeAdministradore->grupos_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grupos De Administradore'), ['action' => 'delete', $gruposDeAdministradore->grupos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposDeAdministradore->grupos_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grupos De Administradores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupos De Administradore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Administradores'), ['controller' => 'Administradores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Administradore'), ['controller' => 'Administradores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gruposDeAdministradores view large-9 medium-8 columns content">
    <h3><?= h($gruposDeAdministradore->grupos_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Grupo') ?></th>
            <td><?= $gruposDeAdministradore->has('grupo') ? $this->Html->link($gruposDeAdministradore->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposDeAdministradore->grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Administradore') ?></th>
            <td><?= $gruposDeAdministradore->has('administradore') ? $this->Html->link($gruposDeAdministradore->administradore->id, ['controller' => 'Administradores', 'action' => 'view', $gruposDeAdministradore->administradore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($gruposDeAdministradore->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($gruposDeAdministradore->modified) ?></td>
        </tr>
    </table>
</div>
