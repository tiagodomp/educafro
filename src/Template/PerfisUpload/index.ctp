<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PerfisUpload[]|\Cake\Collection\CollectionInterface $perfisUpload
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Perfis Upload'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Perfis'), ['controller' => 'Perfis', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Perfi'), ['controller' => 'Perfis', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="perfisUpload index large-9 medium-8 columns content">
    <h3><?= __('Perfis Upload') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('perfis_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($perfisUpload as $perfisUpload): ?>
            <tr>
                <td><?= $this->Number->format($perfisUpload->id) ?></td>
                <td><?= $perfisUpload->has('perfi') ? $this->Html->link($perfisUpload->perfi->id, ['controller' => 'Perfis', 'action' => 'view', $perfisUpload->perfi->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $perfisUpload->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $perfisUpload->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $perfisUpload->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perfisUpload->id)]) ?>
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
