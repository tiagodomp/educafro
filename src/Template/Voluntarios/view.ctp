<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Voluntario $voluntario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Voluntario'), ['action' => 'edit', $voluntario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Voluntario'), ['action' => 'delete', $voluntario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voluntario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Voluntarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Voluntario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regras'), ['controller' => 'Regras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Regra'), ['controller' => 'Regras', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="voluntarios view large-9 medium-8 columns content">
    <h3><?= h($voluntario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $voluntario->has('user') ? $this->Html->link($voluntario->user->id, ['controller' => 'User', 'action' => 'view', $voluntario->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Regra') ?></th>
            <td><?= $voluntario->has('regra') ? $this->Html->link($voluntario->regra->id, ['controller' => 'Regras', 'action' => 'view', $voluntario->regra->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($voluntario->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presenca') ?></th>
            <td><?= h($voluntario->presenca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bonificacao Historico') ?></th>
            <td><?= h($voluntario->bonificacao_historico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Distancia Casa Sede') ?></th>
            <td><?= h($voluntario->distancia_casa_sede) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Auto Avaliacao') ?></th>
            <td><?= h($voluntario->auto_avaliacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avaliacao Equipe') ?></th>
            <td><?= h($voluntario->avaliacao_equipe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avaliacao Administradores') ?></th>
            <td><?= h($voluntario->avaliacao_administradores) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dias Disponiveis') ?></th>
            <td><?= h($voluntario->dias_disponiveis) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($voluntario->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($voluntario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pontuacao') ?></th>
            <td><?= $this->Number->format($voluntario->pontuacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($voluntario->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bonificacao') ?></th>
            <td><?= $voluntario->bonificacao ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
