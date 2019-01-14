<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Outro[]|\Cake\Collection\CollectionInterface $outros
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Outro'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regras'), ['controller' => 'Regras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Regra'), ['controller' => 'Regras', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="outros index large-9 medium-8 columns content">
    <h3><?= __('Outros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('regras_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grupos_id') ?></th>
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
                <th scope="col"><?= $this->Paginator->sort('conselheiro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($outros as $outro): ?>
            <tr>
                <td><?= $this->Number->format($outro->id) ?></td>
                <td><?= $outro->has('user') ? $this->Html->link($outro->user->id, ['controller' => 'User', 'action' => 'view', $outro->user->id]) : '' ?></td>
                <td><?= $outro->has('regra') ? $this->Html->link($outro->regra->id, ['controller' => 'Regras', 'action' => 'view', $outro->regra->id]) : '' ?></td>
                <td><?= $outro->has('grupo') ? $this->Html->link($outro->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $outro->grupo->id]) : '' ?></td>
                <td><?= h($outro->tipo) ?></td>
                <td><?= h($outro->presenca) ?></td>
                <td><?= $this->Number->format($outro->pontuacao) ?></td>
                <td><?= h($outro->bonificacao) ?></td>
                <td><?= h($outro->bonificacao_historico) ?></td>
                <td><?= h($outro->distancia_casa_sede) ?></td>
                <td><?= h($outro->auto_avaliacao) ?></td>
                <td><?= h($outro->avaliacao_equipe) ?></td>
                <td><?= h($outro->avaliacao_administradores) ?></td>
                <td><?= h($outro->dias_disponiveis) ?></td>
                <td><?= h($outro->conselheiro) ?></td>
                <td><?= h($outro->created) ?></td>
                <td><?= h($outro->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $outro->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $outro->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $outro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $outro->id)]) ?>
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
