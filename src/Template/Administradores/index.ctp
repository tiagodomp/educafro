<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administradore[]|\Cake\Collection\CollectionInterface $administradores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Administradore'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regras'), ['controller' => 'Regras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Regra'), ['controller' => 'Regras', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="administradores index large-9 medium-8 columns content">
    <h3><?= __('Administradores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('regras_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('presenca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pontuacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bonificacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bonificacao_historico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('distancia_casa_sede') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dias_disponiveis') ?></th>
                <th scope="col"><?= $this->Paginator->sort('conselheiro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($administradores as $administradore): ?>
            <tr>
                <td><?= $this->Number->format($administradore->id) ?></td>
                <td><?= $administradore->has('regra') ? $this->Html->link($administradore->regra->id, ['controller' => 'Regras', 'action' => 'view', $administradore->regra->id]) : '' ?></td>
                <td><?= $administradore->has('user') ? $this->Html->link($administradore->user->id, ['controller' => 'User', 'action' => 'view', $administradore->user->id]) : '' ?></td>
                <td><?= h($administradore->tipo) ?></td>
                <td><?= h($administradore->presenca) ?></td>
                <td><?= $this->Number->format($administradore->pontuacao) ?></td>
                <td><?= h($administradore->bonificacao) ?></td>
                <td><?= h($administradore->bonificacao_historico) ?></td>
                <td><?= h($administradore->distancia_casa_sede) ?></td>
                <td><?= h($administradore->dias_disponiveis) ?></td>
                <td><?= h($administradore->conselheiro) ?></td>
                <td><?= h($administradore->created) ?></td>
                <td><?= h($administradore->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $administradore->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $administradore->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $administradore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administradore->id)]) ?>
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
