<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdministradoresAco[]|\Cake\Collection\CollectionInterface $administradoresAcoes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Administradores Aco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Administradores'), ['controller' => 'Administradores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Administradore'), ['controller' => 'Administradores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="administradoresAcoes index large-9 medium-8 columns content">
    <h3><?= __('Administradores Acoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('administradores_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($administradoresAcoes as $administradoresAco): ?>
            <tr>
                <td><?= $this->Number->format($administradoresAco->id) ?></td>
                <td><?= $administradoresAco->has('administradore') ? $this->Html->link($administradoresAco->administradore->id, ['controller' => 'Administradores', 'action' => 'view', $administradoresAco->administradore->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $administradoresAco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $administradoresAco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $administradoresAco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administradoresAco->id)]) ?>
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
