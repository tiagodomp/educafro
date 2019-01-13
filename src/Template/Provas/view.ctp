<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prova $prova
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Prova'), ['action' => 'edit', $prova->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Prova'), ['action' => 'delete', $prova->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prova->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Provas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prova'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['controller' => 'Disciplinas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplinas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="provas view large-9 medium-8 columns content">
    <h3><?= h($prova->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Disciplina') ?></th>
            <td><?= $prova->has('disciplina') ? $this->Html->link($prova->disciplina->id, ['controller' => 'Disciplinas', 'action' => 'view', $prova->disciplina->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($prova->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Provas Anima Id') ?></th>
            <td><?= h($prova->provas_anima_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Provas') ?></th>
            <td><?= h($prova->provas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gabarito') ?></th>
            <td><?= h($prova->gabarito) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notas') ?></th>
            <td><?= h($prova->notas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info Anima') ?></th>
            <td><?= h($prova->info_anima) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificadore') ?></th>
            <td><?= $prova->has('modificadore') ? $this->Html->link($prova->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $prova->modificadore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($prova->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($prova->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($prova->modified) ?></td>
        </tr>
    </table>
</div>
