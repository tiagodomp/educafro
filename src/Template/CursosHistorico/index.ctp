<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CursosHistorico[]|\Cake\Collection\CollectionInterface $cursosHistorico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cursos Historico'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cursos Secoes'), ['controller' => 'CursosSecoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cursos Seco'), ['controller' => 'CursosSecoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Log'), ['controller' => 'Log', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Log'), ['controller' => 'Log', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cursosHistorico index large-9 medium-8 columns content">
    <h3><?= __('Cursos Historico') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cursos_secoes_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('log_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ultima_data_iniciada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ultima_data_finalizada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ultimo_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('historico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('historico_aproveitamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cursosHistorico as $cursosHistorico): ?>
            <tr>
                <td><?= $this->Number->format($cursosHistorico->id) ?></td>
                <td><?= $cursosHistorico->has('cursos_seco') ? $this->Html->link($cursosHistorico->cursos_seco->id, ['controller' => 'CursosSecoes', 'action' => 'view', $cursosHistorico->cursos_seco->id]) : '' ?></td>
                <td><?= $cursosHistorico->has('log') ? $this->Html->link($cursosHistorico->log->id, ['controller' => 'Log', 'action' => 'view', $cursosHistorico->log->id]) : '' ?></td>
                <td><?= h($cursosHistorico->ultima_data_iniciada) ?></td>
                <td><?= h($cursosHistorico->ultima_data_finalizada) ?></td>
                <td><?= h($cursosHistorico->ultimo_status) ?></td>
                <td><?= h($cursosHistorico->historico) ?></td>
                <td><?= h($cursosHistorico->historico_aproveitamento) ?></td>
                <td><?= h($cursosHistorico->created) ?></td>
                <td><?= h($cursosHistorico->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cursosHistorico->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cursosHistorico->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cursosHistorico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cursosHistorico->id)]) ?>
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
