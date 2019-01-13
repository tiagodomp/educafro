<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SuperUsuariosInfo $superUsuariosInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Super Usuarios Info'), ['action' => 'edit', $superUsuariosInfo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Super Usuarios Info'), ['action' => 'delete', $superUsuariosInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $superUsuariosInfo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Super Usuarios Info'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Super Usuarios Info'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="superUsuariosInfo view large-9 medium-8 columns content">
    <h3><?= h($superUsuariosInfo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($superUsuariosInfo->id) ?></td>
        </tr>
    </table>
</div>
