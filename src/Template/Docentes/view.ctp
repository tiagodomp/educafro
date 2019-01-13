<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Docente $docente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Docente'), ['action' => 'edit', $docente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Docente'), ['action' => 'delete', $docente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $docente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Docentes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Docente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regras'), ['controller' => 'Regras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Regra'), ['controller' => 'Regras', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="docentes view large-9 medium-8 columns content">
    <h3><?= h($docente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $docente->has('user') ? $this->Html->link($docente->user->id, ['controller' => 'User', 'action' => 'view', $docente->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Regra') ?></th>
            <td><?= $docente->has('regra') ? $this->Html->link($docente->regra->id, ['controller' => 'Regras', 'action' => 'view', $docente->regra->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($docente->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presenca') ?></th>
            <td><?= h($docente->presenca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Distancia Casa Sede') ?></th>
            <td><?= h($docente->distancia_casa_sede) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avaliacao Alunos') ?></th>
            <td><?= h($docente->avaliacao_alunos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avaliacao Dirigentes') ?></th>
            <td><?= h($docente->avaliacao_dirigentes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dias Disponiveis') ?></th>
            <td><?= h($docente->dias_disponiveis) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Meus Alunos') ?></th>
            <td><?= h($docente->meus_alunos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Conselheiro') ?></th>
            <td><?= h($docente->conselheiro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($docente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pontuacao') ?></th>
            <td><?= $this->Number->format($docente->pontuacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($docente->modified) ?></td>
        </tr>
    </table>
</div>
