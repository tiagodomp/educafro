<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SuperUsuario $superUsuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Super Usuario'), ['action' => 'edit', $superUsuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Super Usuario'), ['action' => 'delete', $superUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $superUsuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Super Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Super Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regras'), ['controller' => 'Regras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Regra'), ['controller' => 'Regras', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="superUsuarios view large-9 medium-8 columns content">
    <h3><?= h($superUsuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $superUsuario->has('user') ? $this->Html->link($superUsuario->user->id, ['controller' => 'User', 'action' => 'view', $superUsuario->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Regra') ?></th>
            <td><?= $superUsuario->has('regra') ? $this->Html->link($superUsuario->regra->id, ['controller' => 'Regras', 'action' => 'view', $superUsuario->regra->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($superUsuario->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presenca') ?></th>
            <td><?= h($superUsuario->presenca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bonificacao Historico') ?></th>
            <td><?= h($superUsuario->bonificacao_historico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Distancia Casa Sede') ?></th>
            <td><?= h($superUsuario->distancia_casa_sede) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Auto Avaliacao') ?></th>
            <td><?= h($superUsuario->auto_avaliacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avaliacao Equipe') ?></th>
            <td><?= h($superUsuario->avaliacao_equipe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avaliacao Administradores') ?></th>
            <td><?= h($superUsuario->avaliacao_administradores) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dias Disponiveis') ?></th>
            <td><?= h($superUsuario->dias_disponiveis) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($superUsuario->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($superUsuario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pontuacao') ?></th>
            <td><?= $this->Number->format($superUsuario->pontuacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($superUsuario->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bonificacao') ?></th>
            <td><?= $superUsuario->bonificacao ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
