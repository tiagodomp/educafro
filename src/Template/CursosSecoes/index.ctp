<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CursosSeco[]|\Cake\Collection\CollectionInterface $cursosSecoes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cursos Seco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cursosSecoes index large-9 medium-8 columns content">
    <h3><?= __('Cursos Secoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cursos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('docentes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discentes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_inicio_modulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_final_modulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigo_turma') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vagas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('carga_horaria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prox_secao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('visivel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_inicio_cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_final_cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cursosSecoes as $cursosSeco): ?>
            <tr>
                <td><?= $this->Number->format($cursosSeco->id) ?></td>
                <td><?= $cursosSeco->has('curso') ? $this->Html->link($cursosSeco->curso->id, ['controller' => 'Cursos', 'action' => 'view', $cursosSeco->curso->id]) : '' ?></td>
                <td><?= h($cursosSeco->tipo) ?></td>
                <td><?= $this->Number->format($cursosSeco->quantas) ?></td>
                <td><?= h($cursosSeco->docentes) ?></td>
                <td><?= h($cursosSeco->discentes) ?></td>
                <td><?= h($cursosSeco->data_inicio_modulo) ?></td>
                <td><?= h($cursosSeco->data_final_modulo) ?></td>
                <td><?= $this->Number->format($cursosSeco->codigo_turma) ?></td>
                <td><?= $this->Number->format($cursosSeco->vagas) ?></td>
                <td><?= h($cursosSeco->carga_horaria) ?></td>
                <td><?= h($cursosSeco->prox_secao) ?></td>
                <td><?= h($cursosSeco->visivel) ?></td>
                <td><?= h($cursosSeco->data_inicio_cadastro) ?></td>
                <td><?= h($cursosSeco->data_final_cadastro) ?></td>
                <td><?= h($cursosSeco->created) ?></td>
                <td><?= h($cursosSeco->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cursosSeco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cursosSeco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cursosSeco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cursosSeco->id)]) ?>
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
