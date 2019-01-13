<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposDeDocente[]|\Cake\Collection\CollectionInterface $gruposDeDocentes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Grupos De Docente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Docentes'), ['controller' => 'Docentes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Docente'), ['controller' => 'Docentes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposDeDocentes index large-9 medium-8 columns content">
    <h3><?= __('Grupos De Docentes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('grupos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('docentes_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gruposDeDocentes as $gruposDeDocente): ?>
            <tr>
                <td><?= $gruposDeDocente->has('grupo') ? $this->Html->link($gruposDeDocente->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposDeDocente->grupo->id]) : '' ?></td>
                <td><?= $gruposDeDocente->has('docente') ? $this->Html->link($gruposDeDocente->docente->id, ['controller' => 'Docentes', 'action' => 'view', $gruposDeDocente->docente->id]) : '' ?></td>
                <td><?= h($gruposDeDocente->created) ?></td>
                <td><?= h($gruposDeDocente->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gruposDeDocente->grupos_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gruposDeDocente->grupos_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gruposDeDocente->grupos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposDeDocente->grupos_id)]) ?>
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
