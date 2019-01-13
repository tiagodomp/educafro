<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subtema[]|\Cake\Collection\CollectionInterface $subtemas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subtema'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Temas'), ['controller' => 'Temas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tema'), ['controller' => 'Temas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Docentes'), ['controller' => 'Docentes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Docente'), ['controller' => 'Docentes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subtemas index large-9 medium-8 columns content">
    <h3><?= __('Subtemas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('temas_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('docentes_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('carga_horaria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificadores_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subtemas as $subtema): ?>
            <tr>
                <td><?= $this->Number->format($subtema->id) ?></td>
                <td><?= $subtema->has('tema') ? $this->Html->link($subtema->tema->id, ['controller' => 'Temas', 'action' => 'view', $subtema->tema->id]) : '' ?></td>
                <td><?= $subtema->has('docente') ? $this->Html->link($subtema->docente->id, ['controller' => 'Docentes', 'action' => 'view', $subtema->docente->id]) : '' ?></td>
                <td><?= h($subtema->nome) ?></td>
                <td><?= h($subtema->carga_horaria) ?></td>
                <td><?= $subtema->has('modificadore') ? $this->Html->link($subtema->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $subtema->modificadore->id]) : '' ?></td>
                <td><?= h($subtema->created) ?></td>
                <td><?= h($subtema->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subtema->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subtema->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subtema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtema->id)]) ?>
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
