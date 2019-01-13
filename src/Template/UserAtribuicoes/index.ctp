<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAtribuico[]|\Cake\Collection\CollectionInterface $userAtribuicoes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Atribuico'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userAtribuicoes index large-9 medium-8 columns content">
    <h3><?= __('User Atribuicoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('eventos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('info') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userAtribuicoes as $userAtribuico): ?>
            <tr>
                <td><?= $this->Number->format($userAtribuico->id) ?></td>
                <td><?= $userAtribuico->has('user') ? $this->Html->link($userAtribuico->user->id, ['controller' => 'User', 'action' => 'view', $userAtribuico->user->id]) : '' ?></td>
                <td><?= h($userAtribuico->acao) ?></td>
                <td><?= h($userAtribuico->titulo) ?></td>
                <td><?= $userAtribuico->has('evento') ? $this->Html->link($userAtribuico->evento->id, ['controller' => 'Eventos', 'action' => 'view', $userAtribuico->evento->id]) : '' ?></td>
                <td><?= h($userAtribuico->info) ?></td>
                <td><?= h($userAtribuico->created) ?></td>
                <td><?= h($userAtribuico->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userAtribuico->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userAtribuico->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userAtribuico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAtribuico->id)]) ?>
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
