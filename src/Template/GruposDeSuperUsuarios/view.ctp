<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposDeSuperUsuario $gruposDeSuperUsuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grupos De Super Usuario'), ['action' => 'edit', $gruposDeSuperUsuario->grupos_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grupos De Super Usuario'), ['action' => 'delete', $gruposDeSuperUsuario->grupos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposDeSuperUsuario->grupos_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grupos De Super Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupos De Super Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Super Usuarios'), ['controller' => 'SuperUsuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Super Usuario'), ['controller' => 'SuperUsuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gruposDeSuperUsuarios view large-9 medium-8 columns content">
    <h3><?= h($gruposDeSuperUsuario->grupos_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Grupo') ?></th>
            <td><?= $gruposDeSuperUsuario->has('grupo') ? $this->Html->link($gruposDeSuperUsuario->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposDeSuperUsuario->grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Super Usuario') ?></th>
            <td><?= $gruposDeSuperUsuario->has('super_usuario') ? $this->Html->link($gruposDeSuperUsuario->super_usuario->id, ['controller' => 'SuperUsuarios', 'action' => 'view', $gruposDeSuperUsuario->super_usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($gruposDeSuperUsuario->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($gruposDeSuperUsuario->modified) ?></td>
        </tr>
    </table>
</div>
