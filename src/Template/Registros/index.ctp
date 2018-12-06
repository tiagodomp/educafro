<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Registro[]|\Cake\Collection\CollectionInterface $registros
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Registro'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="registros index large-9 medium-8 columns content">
    <h3><?= __('Registros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registros as $registro): ?>
            <tr>
                <td><?= $this->Number->format($registro->id) ?></td>
                <td><?= h($registro->username) ?></td>
                <td><?= h($registro->cpf) ?></td>
                <td><?= h($registro->email) ?></td>
                <td><?= h($registro->password) ?></td>
                <td><?= h($registro->created) ?></td>
                <td><?= h($registro->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $registro->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $registro->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $registro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registro->id)]) ?>
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
