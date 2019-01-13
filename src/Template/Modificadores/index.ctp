<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Modificadore[]|\Cake\Collection\CollectionInterface $modificadores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Historico Acoes'), ['controller' => 'UserHistoricoAcoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Historico Aco'), ['controller' => 'UserHistoricoAcoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modificadores index large-9 medium-8 columns content">
    <h3><?= __('Modificadores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_historico_acoes_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rastreador_rotas') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($modificadores as $modificadore): ?>
            <tr>
                <td><?= $this->Number->format($modificadore->id) ?></td>
                <td><?= $modificadore->has('user_historico_aco') ? $this->Html->link($modificadore->user_historico_aco->id, ['controller' => 'UserHistoricoAcoes', 'action' => 'view', $modificadore->user_historico_aco->id]) : '' ?></td>
                <td><?= h($modificadore->rastreador_rotas) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $modificadore->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $modificadore->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $modificadore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modificadore->id)]) ?>
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
