<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VoluntariosToken[]|\Cake\Collection\CollectionInterface $voluntariosToken
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Voluntarios Token'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="voluntariosToken index large-9 medium-8 columns content">
    <h3><?= __('Voluntarios Token') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('token') ?></th>
                <th scope="col"><?= $this->Paginator->sort('instancia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ip_restricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($voluntariosToken as $voluntariosToken): ?>
            <tr>
                <td><?= $this->Number->format($voluntariosToken->id) ?></td>
                <td><?= h($voluntariosToken->token) ?></td>
                <td><?= h($voluntariosToken->instancia) ?></td>
                <td><?= h($voluntariosToken->ip_restricao) ?></td>
                <td><?= h($voluntariosToken->created) ?></td>
                <td><?= h($voluntariosToken->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $voluntariosToken->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $voluntariosToken->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $voluntariosToken->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voluntariosToken->id)]) ?>
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
