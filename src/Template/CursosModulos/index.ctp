<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CursosModulo[]|\Cake\Collection\CollectionInterface $cursosModulos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cursos Modulo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cursosModulos index large-9 medium-8 columns content">
    <h3><?= __('Cursos Modulos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cursos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grupos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('abreviacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('matriz_curricular') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('requisitos_deste_modulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cursosModulos as $cursosModulo): ?>
            <tr>
                <td><?= $this->Number->format($cursosModulo->id) ?></td>
                <td><?= $cursosModulo->has('curso') ? $this->Html->link($cursosModulo->curso->id, ['controller' => 'Cursos', 'action' => 'view', $cursosModulo->curso->id]) : '' ?></td>
                <td><?= $cursosModulo->has('grupo') ? $this->Html->link($cursosModulo->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $cursosModulo->grupo->id]) : '' ?></td>
                <td><?= h($cursosModulo->nome) ?></td>
                <td><?= h($cursosModulo->abreviacao) ?></td>
                <td><?= h($cursosModulo->titulo) ?></td>
                <td><?= h($cursosModulo->matriz_curricular) ?></td>
                <td><?= h($cursosModulo->tipo) ?></td>
                <td><?= h($cursosModulo->requisitos_deste_modulo) ?></td>
                <td><?= h($cursosModulo->created) ?></td>
                <td><?= h($cursosModulo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cursosModulo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cursosModulo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cursosModulo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cursosModulo->id)]) ?>
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
