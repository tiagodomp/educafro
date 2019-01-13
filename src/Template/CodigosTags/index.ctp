<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CodigosTag[]|\Cake\Collection\CollectionInterface $codigosTags
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Codigos Tag'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="codigosTags index large-9 medium-8 columns content">
    <h3><?= __('Codigos Tags') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificadores_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('abreviatura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pertencentes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($codigosTags as $codigosTag): ?>
            <tr>
                <td><?= $this->Number->format($codigosTag->id) ?></td>
                <td><?= $codigosTag->has('modificadore') ? $this->Html->link($codigosTag->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $codigosTag->modificadore->id]) : '' ?></td>
                <td><?= h($codigosTag->nome) ?></td>
                <td><?= h($codigosTag->abreviatura) ?></td>
                <td><?= h($codigosTag->pertencentes) ?></td>
                <td><?= h($codigosTag->created) ?></td>
                <td><?= h($codigosTag->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $codigosTag->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $codigosTag->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $codigosTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $codigosTag->id)]) ?>
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
