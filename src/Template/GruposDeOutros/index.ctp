<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposDeOutro[]|\Cake\Collection\CollectionInterface $gruposDeOutros
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Grupos De Outro'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Outros'), ['controller' => 'Outros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Outro'), ['controller' => 'Outros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposDeOutros index large-9 medium-8 columns content">
    <h3><?= __('Grupos De Outros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('grupos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('outros_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gruposDeOutros as $gruposDeOutro): ?>
            <tr>
                <td><?= $gruposDeOutro->has('grupo') ? $this->Html->link($gruposDeOutro->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposDeOutro->grupo->id]) : '' ?></td>
                <td><?= $gruposDeOutro->has('outro') ? $this->Html->link($gruposDeOutro->outro->id, ['controller' => 'Outros', 'action' => 'view', $gruposDeOutro->outro->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gruposDeOutro->grupos_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gruposDeOutro->grupos_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gruposDeOutro->grupos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposDeOutro->grupos_id)]) ?>
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
