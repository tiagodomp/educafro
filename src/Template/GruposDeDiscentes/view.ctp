<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposDeDiscente $gruposDeDiscente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grupos De Discente'), ['action' => 'edit', $gruposDeDiscente->grupos_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grupos De Discente'), ['action' => 'delete', $gruposDeDiscente->grupos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposDeDiscente->grupos_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grupos De Discentes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupos De Discente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Discentes'), ['controller' => 'Discentes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Discente'), ['controller' => 'Discentes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gruposDeDiscentes view large-9 medium-8 columns content">
    <h3><?= h($gruposDeDiscente->grupos_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Grupo') ?></th>
            <td><?= $gruposDeDiscente->has('grupo') ? $this->Html->link($gruposDeDiscente->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposDeDiscente->grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discente') ?></th>
            <td><?= $gruposDeDiscente->has('discente') ? $this->Html->link($gruposDeDiscente->discente->id, ['controller' => 'Discentes', 'action' => 'view', $gruposDeDiscente->discente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($gruposDeDiscente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($gruposDeDiscente->modified) ?></td>
        </tr>
    </table>
</div>
