<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CursosModulo $cursosModulo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cursos Modulo'), ['action' => 'edit', $cursosModulo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cursos Modulo'), ['action' => 'delete', $cursosModulo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cursosModulo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cursos Modulos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cursos Modulo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cursosModulos view large-9 medium-8 columns content">
    <h3><?= h($cursosModulo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Curso') ?></th>
            <td><?= $cursosModulo->has('curso') ? $this->Html->link($cursosModulo->curso->id, ['controller' => 'Cursos', 'action' => 'view', $cursosModulo->curso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grupo') ?></th>
            <td><?= $cursosModulo->has('grupo') ? $this->Html->link($cursosModulo->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $cursosModulo->grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($cursosModulo->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Abreviacao') ?></th>
            <td><?= h($cursosModulo->abreviacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($cursosModulo->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matriz Curricular') ?></th>
            <td><?= h($cursosModulo->matriz_curricular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($cursosModulo->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Requisitos Deste Modulo') ?></th>
            <td><?= h($cursosModulo->requisitos_deste_modulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cursosModulo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cursosModulo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cursosModulo->modified) ?></td>
        </tr>
    </table>
</div>
