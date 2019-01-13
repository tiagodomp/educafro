<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposDeOutro $gruposDeOutro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grupos De Outro'), ['action' => 'edit', $gruposDeOutro->grupos_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grupos De Outro'), ['action' => 'delete', $gruposDeOutro->grupos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposDeOutro->grupos_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grupos De Outros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupos De Outro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Outros'), ['controller' => 'Outros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Outro'), ['controller' => 'Outros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gruposDeOutros view large-9 medium-8 columns content">
    <h3><?= h($gruposDeOutro->grupos_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Grupo') ?></th>
            <td><?= $gruposDeOutro->has('grupo') ? $this->Html->link($gruposDeOutro->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposDeOutro->grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Outro') ?></th>
            <td><?= $gruposDeOutro->has('outro') ? $this->Html->link($gruposDeOutro->outro->id, ['controller' => 'Outros', 'action' => 'view', $gruposDeOutro->outro->id]) : '' ?></td>
        </tr>
    </table>
</div>
