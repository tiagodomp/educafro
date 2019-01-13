<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aula[]|\Cake\Collection\CollectionInterface $aulas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Aula'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtemas'), ['controller' => 'Subtemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtema'), ['controller' => 'Subtemas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aulas index large-9 medium-8 columns content">
    <h3><?= __('Aulas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtemas_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inicio_aula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('final_aula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('docente_presente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discentes_presente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('videoaula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('material_apoio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bibliografia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entregar_trabalho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aulas as $aula): ?>
            <tr>
                <td><?= $this->Number->format($aula->id) ?></td>
                <td><?= $aula->has('subtema') ? $this->Html->link($aula->subtema->id, ['controller' => 'Subtemas', 'action' => 'view', $aula->subtema->id]) : '' ?></td>
                <td><?= h($aula->nome) ?></td>
                <td><?= h($aula->titulo) ?></td>
                <td><?= h($aula->inicio_aula) ?></td>
                <td><?= h($aula->final_aula) ?></td>
                <td><?= h($aula->docente_presente) ?></td>
                <td><?= h($aula->discentes_presente) ?></td>
                <td><?= h($aula->videoaula) ?></td>
                <td><?= h($aula->material_apoio) ?></td>
                <td><?= h($aula->bibliografia) ?></td>
                <td><?= h($aula->entregar_trabalho) ?></td>
                <td><?= h($aula->created) ?></td>
                <td><?= h($aula->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aula->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aula->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aula->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aula->id)]) ?>
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
