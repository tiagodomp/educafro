<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PerfisInfo $perfisInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Perfis Info'), ['action' => 'edit', $perfisInfo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Perfis Info'), ['action' => 'delete', $perfisInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perfisInfo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Perfis Info'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Perfis Info'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Perfis'), ['controller' => 'Perfis', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Perfi'), ['controller' => 'Perfis', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="perfisInfo view large-9 medium-8 columns content">
    <h3><?= h($perfisInfo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Perfi') ?></th>
            <td><?= $perfisInfo->has('perfi') ? $this->Html->link($perfisInfo->perfi->id, ['controller' => 'Perfis', 'action' => 'view', $perfisInfo->perfi->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($perfisInfo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Perfis User Id') ?></th>
            <td><?= $this->Number->format($perfisInfo->perfis_user_id) ?></td>
        </tr>
    </table>
</div>
