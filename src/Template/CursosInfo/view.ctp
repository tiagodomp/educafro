<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CursosInfo $cursosInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cursos Info'), ['action' => 'edit', $cursosInfo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cursos Info'), ['action' => 'delete', $cursosInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cursosInfo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cursos Info'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cursos Info'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cursosInfo view large-9 medium-8 columns content">
    <h3><?= h($cursosInfo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Curso') ?></th>
            <td><?= $cursosInfo->has('curso') ? $this->Html->link($cursosInfo->curso->id, ['controller' => 'Cursos', 'action' => 'view', $cursosInfo->curso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Documentacao Requisitada') ?></th>
            <td><?= h($cursosInfo->documentacao_requisitada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel') ?></th>
            <td><?= h($cursosInfo->nivel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($cursosInfo->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cursosInfo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cursosInfo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cursosInfo->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visivel') ?></th>
            <td><?= $cursosInfo->visivel ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Info') ?></h4>
        <?= $this->Text->autoParagraph(h($cursosInfo->info)); ?>
    </div>
</div>
