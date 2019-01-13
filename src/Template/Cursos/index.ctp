<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Curso[]|\Cake\Collection\CollectionInterface $cursos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cursos index large-9 medium-8 columns content">
    <h3><?= __('Cursos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('img') ?></th>
                <th scope="col"><?= $this->Paginator->sort('visivel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificadores_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cursos as $curso): ?>
            <tr>
                <td><?= $this->Number->format($curso->id) ?></td>
                <td><?= h($curso->logo) ?></td>
                <td><?= h($curso->nome) ?></td>
                <td><?= h($curso->titulo) ?></td>
                <td><?= h($curso->img) ?></td>
                <td><?= h($curso->visivel) ?></td>
                <td><?= h($curso->created) ?></td>
                <td><?= h($curso->modified) ?></td>
                <td><?= $curso->has('modificadore') ? $this->Html->link($curso->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $curso->modificadore->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $curso->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $curso->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $curso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id)]) ?>
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
