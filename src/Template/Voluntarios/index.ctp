<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Voluntario[]|\Cake\Collection\CollectionInterface $voluntarios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Voluntario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regras'), ['controller' => 'Regras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Regra'), ['controller' => 'Regras', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="voluntarios index large-9 medium-8 columns content">
    <h3><?= __('Voluntarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('regras_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('presenca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pontuacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bonificacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bonificacao_historico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('distancia_casa_sede') ?></th>
                <th scope="col"><?= $this->Paginator->sort('auto_avaliacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('avaliacao_equipe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('avaliacao_administradores') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dias_disponiveis') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($voluntarios as $voluntario): ?>
            <tr>
                <td><?= $this->Number->format($voluntario->id) ?></td>
                <td><?= $voluntario->has('user') ? $this->Html->link($voluntario->user->id, ['controller' => 'User', 'action' => 'view', $voluntario->user->id]) : '' ?></td>
                <td><?= $voluntario->has('regra') ? $this->Html->link($voluntario->regra->id, ['controller' => 'Regras', 'action' => 'view', $voluntario->regra->id]) : '' ?></td>
                <td><?= h($voluntario->tipo) ?></td>
                <td><?= h($voluntario->presenca) ?></td>
                <td><?= $this->Number->format($voluntario->pontuacao) ?></td>
                <td><?= h($voluntario->bonificacao) ?></td>
                <td><?= h($voluntario->bonificacao_historico) ?></td>
                <td><?= h($voluntario->distancia_casa_sede) ?></td>
                <td><?= h($voluntario->auto_avaliacao) ?></td>
                <td><?= h($voluntario->avaliacao_equipe) ?></td>
                <td><?= h($voluntario->avaliacao_administradores) ?></td>
                <td><?= h($voluntario->dias_disponiveis) ?></td>
                <td><?= h($voluntario->created) ?></td>
                <td><?= h($voluntario->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $voluntario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $voluntario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $voluntario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voluntario->id)]) ?>
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
