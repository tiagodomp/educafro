<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CursosSeco $cursosSeco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cursos Seco'), ['action' => 'edit', $cursosSeco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cursos Seco'), ['action' => 'delete', $cursosSeco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cursosSeco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cursos Secoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cursos Seco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cursosSecoes view large-9 medium-8 columns content">
    <h3><?= h($cursosSeco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Curso') ?></th>
            <td><?= $cursosSeco->has('curso') ? $this->Html->link($cursosSeco->curso->id, ['controller' => 'Cursos', 'action' => 'view', $cursosSeco->curso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($cursosSeco->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Docentes') ?></th>
            <td><?= h($cursosSeco->docentes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discentes') ?></th>
            <td><?= h($cursosSeco->discentes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Inicio Modulo') ?></th>
            <td><?= h($cursosSeco->data_inicio_modulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Final Modulo') ?></th>
            <td><?= h($cursosSeco->data_final_modulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Carga Horaria') ?></th>
            <td><?= h($cursosSeco->carga_horaria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cursosSeco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantas') ?></th>
            <td><?= $this->Number->format($cursosSeco->quantas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo Turma') ?></th>
            <td><?= $this->Number->format($cursosSeco->codigo_turma) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vagas') ?></th>
            <td><?= $this->Number->format($cursosSeco->vagas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prox Secao') ?></th>
            <td><?= h($cursosSeco->prox_secao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Inicio Cadastro') ?></th>
            <td><?= h($cursosSeco->data_inicio_cadastro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Final Cadastro') ?></th>
            <td><?= h($cursosSeco->data_final_cadastro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cursosSeco->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cursosSeco->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visivel') ?></th>
            <td><?= $cursosSeco->visivel ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
