<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegrasHistoricoAtribuico[]|\Cake\Collection\CollectionInterface $regrasHistoricoAtribuicoes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Regras Historico Atribuico'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Atribuicoes'), ['controller' => 'UserAtribuicoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Atribuico'), ['controller' => 'UserAtribuicoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="regrasHistoricoAtribuicoes index large-9 medium-8 columns content">
    <h3><?= __('Regras Historico Atribuicoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_atribuicoes_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('info') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($regrasHistoricoAtribuicoes as $regrasHistoricoAtribuico): ?>
            <tr>
                <td><?= $this->Number->format($regrasHistoricoAtribuico->id) ?></td>
                <td><?= $regrasHistoricoAtribuico->has('user_atribuico') ? $this->Html->link($regrasHistoricoAtribuico->user_atribuico->id, ['controller' => 'UserAtribuicoes', 'action' => 'view', $regrasHistoricoAtribuico->user_atribuico->id]) : '' ?></td>
                <td><?= h($regrasHistoricoAtribuico->info) ?></td>
                <td><?= h($regrasHistoricoAtribuico->created) ?></td>
                <td><?= h($regrasHistoricoAtribuico->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $regrasHistoricoAtribuico->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $regrasHistoricoAtribuico->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $regrasHistoricoAtribuico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $regrasHistoricoAtribuico->id)]) ?>
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
