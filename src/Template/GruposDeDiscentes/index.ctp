<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposDeDiscente[]|\Cake\Collection\CollectionInterface $gruposDeDiscentes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Grupos De Discente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Discentes'), ['controller' => 'Discentes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Discente'), ['controller' => 'Discentes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposDeDiscentes index large-9 medium-8 columns content">
    <h3><?= __('Grupos De Discentes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('grupos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discentes_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gruposDeDiscentes as $gruposDeDiscente): ?>
            <tr>
                <td><?= $gruposDeDiscente->has('grupo') ? $this->Html->link($gruposDeDiscente->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposDeDiscente->grupo->id]) : '' ?></td>
                <td><?= $gruposDeDiscente->has('discente') ? $this->Html->link($gruposDeDiscente->discente->id, ['controller' => 'Discentes', 'action' => 'view', $gruposDeDiscente->discente->id]) : '' ?></td>
                <td><?= h($gruposDeDiscente->created) ?></td>
                <td><?= h($gruposDeDiscente->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gruposDeDiscente->grupos_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gruposDeDiscente->grupos_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gruposDeDiscente->grupos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposDeDiscente->grupos_id)]) ?>
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
