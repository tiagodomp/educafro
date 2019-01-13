<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SuperUsuario[]|\Cake\Collection\CollectionInterface $superUsuarios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Super Usuario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regras'), ['controller' => 'Regras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Regra'), ['controller' => 'Regras', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="superUsuarios index large-9 medium-8 columns content">
    <h3><?= __('Super Usuarios') ?></h3>
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
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($superUsuarios as $superUsuario): ?>
            <tr>
                <td><?= $this->Number->format($superUsuario->id) ?></td>
                <td><?= $superUsuario->has('user') ? $this->Html->link($superUsuario->user->id, ['controller' => 'User', 'action' => 'view', $superUsuario->user->id]) : '' ?></td>
                <td><?= $superUsuario->has('regra') ? $this->Html->link($superUsuario->regra->id, ['controller' => 'Regras', 'action' => 'view', $superUsuario->regra->id]) : '' ?></td>
                <td><?= h($superUsuario->tipo) ?></td>
                <td><?= h($superUsuario->presenca) ?></td>
                <td><?= $this->Number->format($superUsuario->pontuacao) ?></td>
                <td><?= h($superUsuario->bonificacao) ?></td>
                <td><?= h($superUsuario->bonificacao_historico) ?></td>
                <td><?= h($superUsuario->distancia_casa_sede) ?></td>
                <td><?= h($superUsuario->auto_avaliacao) ?></td>
                <td><?= h($superUsuario->avaliacao_equipe) ?></td>
                <td><?= h($superUsuario->avaliacao_administradores) ?></td>
                <td><?= h($superUsuario->dias_disponiveis) ?></td>
                <td><?= h($superUsuario->modified) ?></td>
                <td><?= h($superUsuario->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $superUsuario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $superUsuario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $superUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $superUsuario->id)]) ?>
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
