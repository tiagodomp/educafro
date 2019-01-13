<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discente $discente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Discente'), ['action' => 'edit', $discente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Discente'), ['action' => 'delete', $discente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Discentes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Discente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regras'), ['controller' => 'Regras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Regra'), ['controller' => 'Regras', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="discentes view large-9 medium-8 columns content">
    <h3><?= h($discente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $discente->has('user') ? $this->Html->link($discente->user->id, ['controller' => 'User', 'action' => 'view', $discente->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Regra') ?></th>
            <td><?= $discente->has('regra') ? $this->Html->link($discente->regra->id, ['controller' => 'Regras', 'action' => 'view', $discente->regra->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($discente->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ra') ?></th>
            <td><?= h($discente->ra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Token Aluno') ?></th>
            <td><?= h($discente->token_aluno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bonificacao Historico') ?></th>
            <td><?= h($discente->bonificacao_historico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aproveitamento') ?></th>
            <td><?= h($discente->aproveitamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Distancia Casa Sede') ?></th>
            <td><?= h($discente->distancia_casa_sede) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monitor') ?></th>
            <td><?= h($discente->monitor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presenca') ?></th>
            <td><?= h($discente->presenca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($discente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($discente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($discente->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bonificacao') ?></th>
            <td><?= $discente->bonificacao ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
