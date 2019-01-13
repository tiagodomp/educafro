<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PerfisInfo[]|\Cake\Collection\CollectionInterface $perfisInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Perfis Info'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Perfis'), ['controller' => 'Perfis', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Perfi'), ['controller' => 'Perfis', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="perfisInfo index large-9 medium-8 columns content">
    <h3><?= __('Perfis Info') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('perfis_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('perfis_user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($perfisInfo as $perfisInfo): ?>
            <tr>
                <td><?= $this->Number->format($perfisInfo->id) ?></td>
                <td><?= $perfisInfo->has('perfi') ? $this->Html->link($perfisInfo->perfi->id, ['controller' => 'Perfis', 'action' => 'view', $perfisInfo->perfi->id]) : '' ?></td>
                <td><?= $this->Number->format($perfisInfo->perfis_user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $perfisInfo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $perfisInfo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $perfisInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perfisInfo->id)]) ?>
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
