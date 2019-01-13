<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposDeAdministradore[]|\Cake\Collection\CollectionInterface $gruposDeAdministradores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Grupos De Administradore'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Administradores'), ['controller' => 'Administradores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Administradore'), ['controller' => 'Administradores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposDeAdministradores index large-9 medium-8 columns content">
    <h3><?= __('Grupos De Administradores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('grupos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('administradores_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gruposDeAdministradores as $gruposDeAdministradore): ?>
            <tr>
                <td><?= $gruposDeAdministradore->has('grupo') ? $this->Html->link($gruposDeAdministradore->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposDeAdministradore->grupo->id]) : '' ?></td>
                <td><?= $gruposDeAdministradore->has('administradore') ? $this->Html->link($gruposDeAdministradore->administradore->id, ['controller' => 'Administradores', 'action' => 'view', $gruposDeAdministradore->administradore->id]) : '' ?></td>
                <td><?= h($gruposDeAdministradore->created) ?></td>
                <td><?= h($gruposDeAdministradore->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gruposDeAdministradore->grupos_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gruposDeAdministradore->grupos_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gruposDeAdministradore->grupos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposDeAdministradore->grupos_id)]) ?>
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
