<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CursosInfo[]|\Cake\Collection\CollectionInterface $cursosInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cursos Info'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cursosInfo index large-9 medium-8 columns content">
    <h3><?= __('Cursos Info') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cursos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('documentacao_requisitada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('visivel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cursosInfo as $cursosInfo): ?>
            <tr>
                <td><?= $this->Number->format($cursosInfo->id) ?></td>
                <td><?= $cursosInfo->has('curso') ? $this->Html->link($cursosInfo->curso->id, ['controller' => 'Cursos', 'action' => 'view', $cursosInfo->curso->id]) : '' ?></td>
                <td><?= h($cursosInfo->documentacao_requisitada) ?></td>
                <td><?= h($cursosInfo->nivel) ?></td>
                <td><?= h($cursosInfo->tipo) ?></td>
                <td><?= h($cursosInfo->visivel) ?></td>
                <td><?= h($cursosInfo->created) ?></td>
                <td><?= h($cursosInfo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cursosInfo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cursosInfo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cursosInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cursosInfo->id)]) ?>
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
