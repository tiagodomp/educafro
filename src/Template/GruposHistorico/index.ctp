<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposHistorico[]|\Cake\Collection\CollectionInterface $gruposHistorico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Grupos Historico'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Log'), ['controller' => 'Log', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Log'), ['controller' => 'Log', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposHistorico index large-9 medium-8 columns content">
    <h3><?= __('Grupos Historico') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('log_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grupos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ultima_data_iniciada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ultima_data_finalizada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ultimo_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('historico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gruposHistorico as $gruposHistorico): ?>
            <tr>
                <td><?= $this->Number->format($gruposHistorico->id) ?></td>
                <td><?= $gruposHistorico->has('log') ? $this->Html->link($gruposHistorico->log->id, ['controller' => 'Log', 'action' => 'view', $gruposHistorico->log->id]) : '' ?></td>
                <td><?= $gruposHistorico->has('grupo') ? $this->Html->link($gruposHistorico->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposHistorico->grupo->id]) : '' ?></td>
                <td><?= h($gruposHistorico->ultima_data_iniciada) ?></td>
                <td><?= h($gruposHistorico->ultima_data_finalizada) ?></td>
                <td><?= h($gruposHistorico->ultimo_status) ?></td>
                <td><?= h($gruposHistorico->historico) ?></td>
                <td><?= h($gruposHistorico->created) ?></td>
                <td><?= h($gruposHistorico->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gruposHistorico->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gruposHistorico->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gruposHistorico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposHistorico->id)]) ?>
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
