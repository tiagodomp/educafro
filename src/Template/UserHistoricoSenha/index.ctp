<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserHistoricoSenha[]|\Cake\Collection\CollectionInterface $userHistoricoSenha
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Historico Senha'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userHistoricoSenha index large-9 medium-8 columns content">
    <h3><?= __('User Historico Senha') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('senhas') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userHistoricoSenha as $userHistoricoSenha): ?>
            <tr>
                <td><?= $this->Number->format($userHistoricoSenha->id) ?></td>
                <td><?= $userHistoricoSenha->has('user') ? $this->Html->link($userHistoricoSenha->user->id, ['controller' => 'User', 'action' => 'view', $userHistoricoSenha->user->id]) : '' ?></td>
                <td><?= h($userHistoricoSenha->senhas) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userHistoricoSenha->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userHistoricoSenha->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userHistoricoSenha->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userHistoricoSenha->id)]) ?>
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
