<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administradore $administradore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Administradore'), ['action' => 'edit', $administradore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Administradore'), ['action' => 'delete', $administradore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administradore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Administradores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Administradore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regras'), ['controller' => 'Regras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Regra'), ['controller' => 'Regras', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="administradores view large-9 medium-8 columns content">
    <h3><?= h($administradore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Regra') ?></th>
            <td><?= $administradore->has('regra') ? $this->Html->link($administradore->regra->id, ['controller' => 'Regras', 'action' => 'view', $administradore->regra->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $administradore->has('user') ? $this->Html->link($administradore->user->id, ['controller' => 'User', 'action' => 'view', $administradore->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($administradore->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presenca') ?></th>
            <td><?= h($administradore->presenca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bonificacao Historico') ?></th>
            <td><?= h($administradore->bonificacao_historico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Distancia Casa Sede') ?></th>
            <td><?= h($administradore->distancia_casa_sede) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dias Disponiveis') ?></th>
            <td><?= h($administradore->dias_disponiveis) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Conselheiro') ?></th>
            <td><?= h($administradore->conselheiro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($administradore->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pontuacao') ?></th>
            <td><?= $this->Number->format($administradore->pontuacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($administradore->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($administradore->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bonificacao') ?></th>
            <td><?= $administradore->bonificacao ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
