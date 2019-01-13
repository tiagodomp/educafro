<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discente[]|\Cake\Collection\CollectionInterface $discentes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Discente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regras'), ['controller' => 'Regras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Regra'), ['controller' => 'Regras', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="discentes index large-9 medium-8 columns content">
    <h3><?= __('Discentes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('regras_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('token_aluno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bonificacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bonificacao_historico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aproveitamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('distancia_casa_sede') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monitor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('presenca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($discentes as $discente): ?>
            <tr>
                <td><?= $this->Number->format($discente->id) ?></td>
                <td><?= $discente->has('user') ? $this->Html->link($discente->user->id, ['controller' => 'User', 'action' => 'view', $discente->user->id]) : '' ?></td>
                <td><?= $discente->has('regra') ? $this->Html->link($discente->regra->id, ['controller' => 'Regras', 'action' => 'view', $discente->regra->id]) : '' ?></td>
                <td><?= h($discente->tipo) ?></td>
                <td><?= h($discente->ra) ?></td>
                <td><?= h($discente->token_aluno) ?></td>
                <td><?= h($discente->bonificacao) ?></td>
                <td><?= h($discente->bonificacao_historico) ?></td>
                <td><?= h($discente->aproveitamento) ?></td>
                <td><?= h($discente->distancia_casa_sede) ?></td>
                <td><?= h($discente->monitor) ?></td>
                <td><?= h($discente->presenca) ?></td>
                <td><?= h($discente->created) ?></td>
                <td><?= h($discente->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $discente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $discente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $discente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discente->id)]) ?>
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
