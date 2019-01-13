<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tema $tema
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tema'), ['action' => 'edit', $tema->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tema'), ['action' => 'delete', $tema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tema->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Temas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tema'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['controller' => 'Disciplinas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplinas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="temas view large-9 medium-8 columns content">
    <h3><?= h($tema->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Disciplina') ?></th>
            <td><?= $tema->has('disciplina') ? $this->Html->link($tema->disciplina->id, ['controller' => 'Disciplinas', 'action' => 'view', $tema->disciplina->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($tema->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificadore') ?></th>
            <td><?= $tema->has('modificadore') ? $this->Html->link($tema->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $tema->modificadore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tema->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tema->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tema->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($tema->descricao)); ?>
    </div>
</div>
