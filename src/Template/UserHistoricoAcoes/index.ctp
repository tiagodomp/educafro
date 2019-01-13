<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserHistoricoAco[]|\Cake\Collection\CollectionInterface $userHistoricoAcoes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Historico Aco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Log'), ['controller' => 'Log', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Log'), ['controller' => 'Log', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userHistoricoAcoes index large-9 medium-8 columns content">
    <h3><?= __('User Historico Acoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('log_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acoes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acessos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uploads') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userHistoricoAcoes as $userHistoricoAco): ?>
            <tr>
                <td><?= $this->Number->format($userHistoricoAco->id) ?></td>
                <td><?= $userHistoricoAco->has('user') ? $this->Html->link($userHistoricoAco->user->id, ['controller' => 'User', 'action' => 'view', $userHistoricoAco->user->id]) : '' ?></td>
                <td><?= $userHistoricoAco->has('log') ? $this->Html->link($userHistoricoAco->log->id, ['controller' => 'Log', 'action' => 'view', $userHistoricoAco->log->id]) : '' ?></td>
                <td><?= h($userHistoricoAco->acoes) ?></td>
                <td><?= h($userHistoricoAco->acessos) ?></td>
                <td><?= h($userHistoricoAco->uploads) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userHistoricoAco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userHistoricoAco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userHistoricoAco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userHistoricoAco->id)]) ?>
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
