<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Curso $curso
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Curso'), ['action' => 'edit', $curso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Curso'), ['action' => 'delete', $curso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cursos view large-9 medium-8 columns content">
    <h3><?= h($curso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Logo') ?></th>
            <td><?= h($curso->logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($curso->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($curso->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img') ?></th>
            <td><?= h($curso->img) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificadore') ?></th>
            <td><?= $curso->has('modificadore') ? $this->Html->link($curso->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $curso->modificadore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($curso->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($curso->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($curso->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visivel') ?></th>
            <td><?= $curso->visivel ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($curso->descricao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Descricao Html') ?></h4>
        <?= $this->Text->autoParagraph(h($curso->descricao_html)); ?>
    </div>
    <div class="row">
        <h4><?= __('Objetivo') ?></h4>
        <?= $this->Text->autoParagraph(h($curso->objetivo)); ?>
    </div>
</div>
