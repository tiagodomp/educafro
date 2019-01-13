<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CodigosInfo[]|\Cake\Collection\CollectionInterface $codigosInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Codigos Info'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Codigos'), ['controller' => 'Codigos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Codigo'), ['controller' => 'Codigos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="codigosInfo index large-9 medium-8 columns content">
    <h3><?= __('Codigos Info') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificadores_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('img') ?></th>
                <th scope="col"><?= $this->Paginator->sort('beneficios') ?></th>
                <th scope="col"><?= $this->Paginator->sort('publico_alvo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('como_obter') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($codigosInfo as $codigosInfo): ?>
            <tr>
                <td><?= $this->Number->format($codigosInfo->id) ?></td>
                <td><?= $codigosInfo->has('codigo') ? $this->Html->link($codigosInfo->codigo->id, ['controller' => 'Codigos', 'action' => 'view', $codigosInfo->codigo->id]) : '' ?></td>
                <td><?= $codigosInfo->has('modificadore') ? $this->Html->link($codigosInfo->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $codigosInfo->modificadore->id]) : '' ?></td>
                <td><?= h($codigosInfo->nome) ?></td>
                <td><?= h($codigosInfo->titulo) ?></td>
                <td><?= h($codigosInfo->descricao) ?></td>
                <td><?= h($codigosInfo->img) ?></td>
                <td><?= h($codigosInfo->beneficios) ?></td>
                <td><?= h($codigosInfo->publico_alvo) ?></td>
                <td><?= h($codigosInfo->como_obter) ?></td>
                <td><?= h($codigosInfo->created) ?></td>
                <td><?= h($codigosInfo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $codigosInfo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $codigosInfo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $codigosInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $codigosInfo->id)]) ?>
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
