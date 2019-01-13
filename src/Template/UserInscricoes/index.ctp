<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserInscrico[]|\Cake\Collection\CollectionInterface $userInscricoes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Inscrico'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userInscricoes index large-9 medium-8 columns content">
    <h3><?= __('User Inscricoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('autorizado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inscricoes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userInscricoes as $userInscrico): ?>
            <tr>
                <td><?= $this->Number->format($userInscrico->id) ?></td>
                <td><?= $userInscrico->has('user') ? $this->Html->link($userInscrico->user->id, ['controller' => 'User', 'action' => 'view', $userInscrico->user->id]) : '' ?></td>
                <td><?= h($userInscrico->autorizado) ?></td>
                <td><?= h($userInscrico->inscricoes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userInscrico->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userInscrico->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userInscrico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userInscrico->id)]) ?>
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
