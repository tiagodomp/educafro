<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposMembro[]|\Cake\Collection\CollectionInterface $gruposMembros
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Grupos Membro'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposMembros index large-9 medium-8 columns content">
    <h3><?= __('Grupos Membros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grupos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('membros') ?></th>
                <th scope="col"><?= $this->Paginator->sort('path') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gruposMembros as $gruposMembro): ?>
            <tr>
                <td><?= $this->Number->format($gruposMembro->id) ?></td>
                <td><?= $gruposMembro->has('grupo') ? $this->Html->link($gruposMembro->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposMembro->grupo->id]) : '' ?></td>
                <td><?= h($gruposMembro->membros) ?></td>
                <td><?= h($gruposMembro->path) ?></td>
                <td><?= h($gruposMembro->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gruposMembro->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gruposMembro->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gruposMembro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposMembro->id)]) ?>
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
