<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disciplina[]|\Cake\Collection\CollectionInterface $disciplinas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Disciplina'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cursos Modulos'), ['controller' => 'CursosModulos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cursos Modulo'), ['controller' => 'CursosModulos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="disciplinas index large-9 medium-8 columns content">
    <h3><?= __('Disciplinas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cursos_modulos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('icon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('credito_aula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('credito_trabalho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('carga_horaria_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('setores_enem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('programa_resumido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('avaliacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificadores_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($disciplinas as $disciplina): ?>
            <tr>
                <td><?= $this->Number->format($disciplina->id) ?></td>
                <td><?= $disciplina->has('cursos_modulo') ? $this->Html->link($disciplina->cursos_modulo->id, ['controller' => 'CursosModulos', 'action' => 'view', $disciplina->cursos_modulo->id]) : '' ?></td>
                <td><?= h($disciplina->nome) ?></td>
                <td><?= h($disciplina->icon) ?></td>
                <td><?= $this->Number->format($disciplina->credito_aula) ?></td>
                <td><?= $this->Number->format($disciplina->credito_trabalho) ?></td>
                <td><?= $this->Number->format($disciplina->carga_horaria_total) ?></td>
                <td><?= h($disciplina->setores_enem) ?></td>
                <td><?= h($disciplina->ativar) ?></td>
                <td><?= h($disciplina->programa_resumido) ?></td>
                <td><?= h($disciplina->avaliacao) ?></td>
                <td><?= h($disciplina->created) ?></td>
                <td><?= h($disciplina->modified) ?></td>
                <td><?= $disciplina->has('modificadore') ? $this->Html->link($disciplina->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $disciplina->modificadore->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $disciplina->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $disciplina->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $disciplina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disciplina->id)]) ?>
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
