<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserPreferencia[]|\Cake\Collection\CollectionInterface $userPreferencias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Preferencia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userPreferencias index large-9 medium-8 columns content">
    <h3><?= __('User Preferencias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('configuracoes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('temas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('plugins') ?></th>
                <th scope="col"><?= $this->Paginator->sort('temporarios') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userPreferencias as $userPreferencia): ?>
            <tr>
                <td><?= $this->Number->format($userPreferencia->id) ?></td>
                <td><?= $userPreferencia->has('user') ? $this->Html->link($userPreferencia->user->id, ['controller' => 'User', 'action' => 'view', $userPreferencia->user->id]) : '' ?></td>
                <td><?= h($userPreferencia->configuracoes) ?></td>
                <td><?= h($userPreferencia->temas) ?></td>
                <td><?= h($userPreferencia->plugins) ?></td>
                <td><?= h($userPreferencia->temporarios) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userPreferencia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userPreferencia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userPreferencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userPreferencia->id)]) ?>
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
