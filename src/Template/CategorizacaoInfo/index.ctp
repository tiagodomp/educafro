<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategorizacaoInfo[]|\Cake\Collection\CollectionInterface $categorizacaoInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Categorizacao Info'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorizacao'), ['controller' => 'Categorizacao', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categorizacao'), ['controller' => 'Categorizacao', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categorizacaoInfo index large-9 medium-8 columns content">
    <h3><?= __('Categorizacao Info') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categorizacao_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorizacaoInfo as $categorizacaoInfo): ?>
            <tr>
                <td><?= $this->Number->format($categorizacaoInfo->id) ?></td>
                <td><?= $categorizacaoInfo->has('categorizacao') ? $this->Html->link($categorizacaoInfo->categorizacao->id, ['controller' => 'Categorizacao', 'action' => 'view', $categorizacaoInfo->categorizacao->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $categorizacaoInfo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categorizacaoInfo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categorizacaoInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorizacaoInfo->id)]) ?>
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
