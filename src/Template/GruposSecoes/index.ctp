<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposSeco[]|\Cake\Collection\CollectionInterface $gruposSecoes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Grupos Seco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposSecoes index large-9 medium-8 columns content">
    <h3><?= __('Grupos Secoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grupos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inscritos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pendentes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('matriculados') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rejeitados') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigo_do_grupo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gruposSecoes as $gruposSeco): ?>
            <tr>
                <td><?= $this->Number->format($gruposSeco->id) ?></td>
                <td><?= $gruposSeco->has('grupo') ? $this->Html->link($gruposSeco->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposSeco->grupo->id]) : '' ?></td>
                <td><?= h($gruposSeco->titulo) ?></td>
                <td><?= h($gruposSeco->inscritos) ?></td>
                <td><?= h($gruposSeco->pendentes) ?></td>
                <td><?= h($gruposSeco->matriculados) ?></td>
                <td><?= h($gruposSeco->rejeitados) ?></td>
                <td><?= h($gruposSeco->codigo_do_grupo) ?></td>
                <td><?= h($gruposSeco->created) ?></td>
                <td><?= h($gruposSeco->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gruposSeco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gruposSeco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gruposSeco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposSeco->id)]) ?>
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
