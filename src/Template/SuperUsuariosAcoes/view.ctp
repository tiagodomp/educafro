<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SuperUsuariosAco $superUsuariosAco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Super Usuarios Aco'), ['action' => 'edit', $superUsuariosAco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Super Usuarios Aco'), ['action' => 'delete', $superUsuariosAco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $superUsuariosAco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Super Usuarios Acoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Super Usuarios Aco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Super Usuarios'), ['controller' => 'SuperUsuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Super Usuario'), ['controller' => 'SuperUsuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="superUsuariosAcoes view large-9 medium-8 columns content">
    <h3><?= h($superUsuariosAco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Super Usuario') ?></th>
            <td><?= $superUsuariosAco->has('super_usuario') ? $this->Html->link($superUsuariosAco->super_usuario->id, ['controller' => 'SuperUsuarios', 'action' => 'view', $superUsuariosAco->super_usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($superUsuariosAco->id) ?></td>
        </tr>
    </table>
</div>
