<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PerfisPreferencia $perfisPreferencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Perfis Preferencia'), ['action' => 'edit', $perfisPreferencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Perfis Preferencia'), ['action' => 'delete', $perfisPreferencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perfisPreferencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Perfis Preferencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Perfis Preferencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Perfis'), ['controller' => 'Perfis', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Perfi'), ['controller' => 'Perfis', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="perfisPreferencias view large-9 medium-8 columns content">
    <h3><?= h($perfisPreferencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Perfi') ?></th>
            <td><?= $perfisPreferencia->has('perfi') ? $this->Html->link($perfisPreferencia->perfi->id, ['controller' => 'Perfis', 'action' => 'view', $perfisPreferencia->perfi->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($perfisPreferencia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Perfis User Id') ?></th>
            <td><?= $this->Number->format($perfisPreferencia->perfis_user_id) ?></td>
        </tr>
    </table>
</div>
