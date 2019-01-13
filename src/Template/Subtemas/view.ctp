<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subtema $subtema
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subtema'), ['action' => 'edit', $subtema->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subtema'), ['action' => 'delete', $subtema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtema->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subtemas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtema'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Temas'), ['controller' => 'Temas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tema'), ['controller' => 'Temas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Docentes'), ['controller' => 'Docentes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Docente'), ['controller' => 'Docentes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subtemas view large-9 medium-8 columns content">
    <h3><?= h($subtema->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tema') ?></th>
            <td><?= $subtema->has('tema') ? $this->Html->link($subtema->tema->id, ['controller' => 'Temas', 'action' => 'view', $subtema->tema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Docente') ?></th>
            <td><?= $subtema->has('docente') ? $this->Html->link($subtema->docente->id, ['controller' => 'Docentes', 'action' => 'view', $subtema->docente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($subtema->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Carga Horaria') ?></th>
            <td><?= h($subtema->carga_horaria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificadore') ?></th>
            <td><?= $subtema->has('modificadore') ? $this->Html->link($subtema->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $subtema->modificadore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subtema->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($subtema->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($subtema->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($subtema->descricao)); ?>
    </div>
</div>
