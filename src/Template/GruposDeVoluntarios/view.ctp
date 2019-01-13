<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposDeVoluntario $gruposDeVoluntario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grupos De Voluntario'), ['action' => 'edit', $gruposDeVoluntario->grupos_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grupos De Voluntario'), ['action' => 'delete', $gruposDeVoluntario->grupos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposDeVoluntario->grupos_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grupos De Voluntarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupos De Voluntario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Voluntarios'), ['controller' => 'Voluntarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Voluntario'), ['controller' => 'Voluntarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gruposDeVoluntarios view large-9 medium-8 columns content">
    <h3><?= h($gruposDeVoluntario->grupos_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Grupo') ?></th>
            <td><?= $gruposDeVoluntario->has('grupo') ? $this->Html->link($gruposDeVoluntario->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposDeVoluntario->grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Voluntario') ?></th>
            <td><?= $gruposDeVoluntario->has('voluntario') ? $this->Html->link($gruposDeVoluntario->voluntario->id, ['controller' => 'Voluntarios', 'action' => 'view', $gruposDeVoluntario->voluntario->id]) : '' ?></td>
        </tr>
    </table>
</div>
