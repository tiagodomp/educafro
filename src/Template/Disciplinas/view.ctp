<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disciplina $disciplina
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Disciplina'), ['action' => 'edit', $disciplina->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Disciplina'), ['action' => 'delete', $disciplina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disciplina->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disciplina'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cursos Modulos'), ['controller' => 'CursosModulos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cursos Modulo'), ['controller' => 'CursosModulos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="disciplinas view large-9 medium-8 columns content">
    <h3><?= h($disciplina->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cursos Modulo') ?></th>
            <td><?= $disciplina->has('cursos_modulo') ? $this->Html->link($disciplina->cursos_modulo->id, ['controller' => 'CursosModulos', 'action' => 'view', $disciplina->cursos_modulo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($disciplina->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Icon') ?></th>
            <td><?= h($disciplina->icon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Setores Enem') ?></th>
            <td><?= h($disciplina->setores_enem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Programa Resumido') ?></th>
            <td><?= h($disciplina->programa_resumido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avaliacao') ?></th>
            <td><?= h($disciplina->avaliacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificadore') ?></th>
            <td><?= $disciplina->has('modificadore') ? $this->Html->link($disciplina->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $disciplina->modificadore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($disciplina->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Credito Aula') ?></th>
            <td><?= $this->Number->format($disciplina->credito_aula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Credito Trabalho') ?></th>
            <td><?= $this->Number->format($disciplina->credito_trabalho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Carga Horaria Total') ?></th>
            <td><?= $this->Number->format($disciplina->carga_horaria_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativar') ?></th>
            <td><?= h($disciplina->ativar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($disciplina->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($disciplina->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($disciplina->descricao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Objetivos') ?></h4>
        <?= $this->Text->autoParagraph(h($disciplina->objetivos)); ?>
    </div>
    <div class="row">
        <h4><?= __('Programa') ?></h4>
        <?= $this->Text->autoParagraph(h($disciplina->programa)); ?>
    </div>
    <div class="row">
        <h4><?= __('Metodo') ?></h4>
        <?= $this->Text->autoParagraph(h($disciplina->metodo)); ?>
    </div>
    <div class="row">
        <h4><?= __('Criterio') ?></h4>
        <?= $this->Text->autoParagraph(h($disciplina->criterio)); ?>
    </div>
    <div class="row">
        <h4><?= __('Recuperacao') ?></h4>
        <?= $this->Text->autoParagraph(h($disciplina->recuperacao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Bibliografia') ?></h4>
        <?= $this->Text->autoParagraph(h($disciplina->bibliografia)); ?>
    </div>
</div>
