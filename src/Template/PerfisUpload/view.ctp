<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PerfisUpload $perfisUpload
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Perfis Upload'), ['action' => 'edit', $perfisUpload->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Perfis Upload'), ['action' => 'delete', $perfisUpload->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perfisUpload->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Perfis Upload'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Perfis Upload'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Perfis'), ['controller' => 'Perfis', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Perfi'), ['controller' => 'Perfis', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="perfisUpload view large-9 medium-8 columns content">
    <h3><?= h($perfisUpload->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Perfi') ?></th>
            <td><?= $perfisUpload->has('perfi') ? $this->Html->link($perfisUpload->perfi->id, ['controller' => 'Perfis', 'action' => 'view', $perfisUpload->perfi->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($perfisUpload->id) ?></td>
        </tr>
    </table>
</div>
