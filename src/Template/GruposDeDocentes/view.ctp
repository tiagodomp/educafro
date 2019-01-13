<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposDeDocente $gruposDeDocente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grupos De Docente'), ['action' => 'edit', $gruposDeDocente->grupos_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grupos De Docente'), ['action' => 'delete', $gruposDeDocente->grupos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposDeDocente->grupos_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grupos De Docentes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupos De Docente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Docentes'), ['controller' => 'Docentes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Docente'), ['controller' => 'Docentes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gruposDeDocentes view large-9 medium-8 columns content">
    <h3><?= h($gruposDeDocente->grupos_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Grupo') ?></th>
            <td><?= $gruposDeDocente->has('grupo') ? $this->Html->link($gruposDeDocente->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposDeDocente->grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Docente') ?></th>
            <td><?= $gruposDeDocente->has('docente') ? $this->Html->link($gruposDeDocente->docente->id, ['controller' => 'Docentes', 'action' => 'view', $gruposDeDocente->docente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($gruposDeDocente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($gruposDeDocente->modified) ?></td>
        </tr>
    </table>
</div>
