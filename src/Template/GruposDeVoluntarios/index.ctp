<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposDeVoluntario[]|\Cake\Collection\CollectionInterface $gruposDeVoluntarios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Grupos De Voluntario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Voluntarios'), ['controller' => 'Voluntarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Voluntario'), ['controller' => 'Voluntarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposDeVoluntarios index large-9 medium-8 columns content">
    <h3><?= __('Grupos De Voluntarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('grupos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('voluntarios_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gruposDeVoluntarios as $gruposDeVoluntario): ?>
            <tr>
                <td><?= $gruposDeVoluntario->has('grupo') ? $this->Html->link($gruposDeVoluntario->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposDeVoluntario->grupo->id]) : '' ?></td>
                <td><?= $gruposDeVoluntario->has('voluntario') ? $this->Html->link($gruposDeVoluntario->voluntario->id, ['controller' => 'Voluntarios', 'action' => 'view', $gruposDeVoluntario->voluntario->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gruposDeVoluntario->grupos_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gruposDeVoluntario->grupos_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gruposDeVoluntario->grupos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposDeVoluntario->grupos_id)]) ?>
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
