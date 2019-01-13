<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Outro $outro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Outro'), ['action' => 'edit', $outro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Outro'), ['action' => 'delete', $outro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $outro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Outros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Outro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regras'), ['controller' => 'Regras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Regra'), ['controller' => 'Regras', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="outros view large-9 medium-8 columns content">
    <h3><?= h($outro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $outro->has('user') ? $this->Html->link($outro->user->id, ['controller' => 'User', 'action' => 'view', $outro->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Regra') ?></th>
            <td><?= $outro->has('regra') ? $this->Html->link($outro->regra->id, ['controller' => 'Regras', 'action' => 'view', $outro->regra->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($outro->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presenca') ?></th>
            <td><?= h($outro->presenca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bonificacao Historico') ?></th>
            <td><?= h($outro->bonificacao_historico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Distancia Casa Sede') ?></th>
            <td><?= h($outro->distancia_casa_sede) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Auto Avaliacao') ?></th>
            <td><?= h($outro->auto_avaliacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avaliacao Equipe') ?></th>
            <td><?= h($outro->avaliacao_equipe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avaliacao Administradores') ?></th>
            <td><?= h($outro->avaliacao_administradores) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dias Disponiveis') ?></th>
            <td><?= h($outro->dias_disponiveis) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Conselheiro') ?></th>
            <td><?= h($outro->conselheiro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($outro->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pontuacao') ?></th>
            <td><?= $this->Number->format($outro->pontuacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($outro->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($outro->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bonificacao') ?></th>
            <td><?= $outro->bonificacao ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
