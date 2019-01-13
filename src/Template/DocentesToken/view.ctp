<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DocentesToken $docentesToken
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Docentes Token'), ['action' => 'edit', $docentesToken->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Docentes Token'), ['action' => 'delete', $docentesToken->id], ['confirm' => __('Are you sure you want to delete # {0}?', $docentesToken->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Docentes Token'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Docentes Token'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Docentes'), ['controller' => 'Docentes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Docente'), ['controller' => 'Docentes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="docentesToken view large-9 medium-8 columns content">
    <h3><?= h($docentesToken->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Token') ?></th>
            <td><?= h($docentesToken->token) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Senhas') ?></th>
            <td><?= h($docentesToken->senhas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Docente') ?></th>
            <td><?= $docentesToken->has('docente') ? $this->Html->link($docentesToken->docente->id, ['controller' => 'Docentes', 'action' => 'view', $docentesToken->docente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($docentesToken->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($docentesToken->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($docentesToken->modified) ?></td>
        </tr>
    </table>
</div>
