<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdministradoresToken[]|\Cake\Collection\CollectionInterface $administradoresTokens
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Administradores Token'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Administradores'), ['controller' => 'Administradores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Administradore'), ['controller' => 'Administradores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="administradoresTokens index large-9 medium-8 columns content">
    <h3><?= __('Administradores Tokens') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('administradores_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('token') ?></th>
                <th scope="col"><?= $this->Paginator->sort('instancia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ip_restricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($administradoresTokens as $administradoresToken): ?>
            <tr>
                <td><?= $this->Number->format($administradoresToken->id) ?></td>
                <td><?= $administradoresToken->has('administradore') ? $this->Html->link($administradoresToken->administradore->id, ['controller' => 'Administradores', 'action' => 'view', $administradoresToken->administradore->id]) : '' ?></td>
                <td><?= h($administradoresToken->token) ?></td>
                <td><?= h($administradoresToken->instancia) ?></td>
                <td><?= h($administradoresToken->ip_restricao) ?></td>
                <td><?= h($administradoresToken->created) ?></td>
                <td><?= h($administradoresToken->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $administradoresToken->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $administradoresToken->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $administradoresToken->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administradoresToken->id)]) ?>
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
