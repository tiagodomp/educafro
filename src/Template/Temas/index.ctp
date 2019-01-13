<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tema[]|\Cake\Collection\CollectionInterface $temas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tema'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['controller' => 'Disciplinas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplinas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="temas index large-9 medium-8 columns content">
    <h3><?= __('Temas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disciplinas_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificadores_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($temas as $tema): ?>
            <tr>
                <td><?= $this->Number->format($tema->id) ?></td>
                <td><?= $tema->has('disciplina') ? $this->Html->link($tema->disciplina->id, ['controller' => 'Disciplinas', 'action' => 'view', $tema->disciplina->id]) : '' ?></td>
                <td><?= h($tema->nome) ?></td>
                <td><?= $tema->has('modificadore') ? $this->Html->link($tema->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $tema->modificadore->id]) : '' ?></td>
                <td><?= h($tema->created) ?></td>
                <td><?= h($tema->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tema->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tema->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tema->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
