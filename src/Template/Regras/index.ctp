<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Regra[]|\Cake\Collection\CollectionInterface $regras
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Regra'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regras Hierarquias'), ['controller' => 'RegrasHierarquias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Regras Hierarquia'), ['controller' => 'RegrasHierarquias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="regras index large-9 medium-8 columns content">
    <h3><?= __('Regras') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grupos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('regras_hierarquias_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cargo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('info') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificadores_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($regras as $regra): ?>
            <tr>
                <td><?= $this->Number->format($regra->id) ?></td>
                <td><?= $regra->has('grupo') ? $this->Html->link($regra->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $regra->grupo->id]) : '' ?></td>
                <td><?= $regra->has('regras_hierarquia') ? $this->Html->link($regra->regras_hierarquia->id, ['controller' => 'RegrasHierarquias', 'action' => 'view', $regra->regras_hierarquia->id]) : '' ?></td>
                <td><?= h($regra->cargo) ?></td>
                <td><?= h($regra->status) ?></td>
                <td><?= h($regra->info) ?></td>
                <td><?= h($regra->created) ?></td>
                <td><?= h($regra->modified) ?></td>
                <td><?= $regra->has('modificadore') ? $this->Html->link($regra->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $regra->modificadore->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $regra->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $regra->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $regra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $regra->id)]) ?>
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
