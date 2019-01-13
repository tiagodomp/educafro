<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposInfo[]|\Cake\Collection\CollectionInterface $gruposInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Grupos Info'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposInfo index large-9 medium-8 columns content">
    <h3><?= __('Grupos Info') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grupos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('visivel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificadores_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gruposInfo as $gruposInfo): ?>
            <tr>
                <td><?= $this->Number->format($gruposInfo->id) ?></td>
                <td><?= $gruposInfo->has('grupo') ? $this->Html->link($gruposInfo->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposInfo->grupo->id]) : '' ?></td>
                <td><?= h($gruposInfo->tipo) ?></td>
                <td><?= h($gruposInfo->visivel) ?></td>
                <td><?= h($gruposInfo->created) ?></td>
                <td><?= h($gruposInfo->modified) ?></td>
                <td><?= $gruposInfo->has('modificadore') ? $this->Html->link($gruposInfo->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $gruposInfo->modificadore->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gruposInfo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gruposInfo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gruposInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposInfo->id)]) ?>
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
