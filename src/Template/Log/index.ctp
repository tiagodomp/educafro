<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Log[]|\Cake\Collection\CollectionInterface $log
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Log'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cursos Modulos'), ['controller' => 'CursosModulos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cursos Modulo'), ['controller' => 'CursosModulos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cursos Historico'), ['controller' => 'CursosHistorico', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cursos Historico'), ['controller' => 'CursosHistorico', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos Historico'), ['controller' => 'GruposHistorico', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupos Historico'), ['controller' => 'GruposHistorico', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Historico Acoes'), ['controller' => 'UserHistoricoAcoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Historico Aco'), ['controller' => 'UserHistoricoAcoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="log index large-9 medium-8 columns content">
    <h3><?= __('Log') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('avisos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mysql_log_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cursos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cursos_modulo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('eventos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('info') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($log as $log): ?>
            <tr>
                <td><?= $this->Number->format($log->id) ?></td>
                <td><?= $this->Number->format($log->user_id) ?></td>
                <td><?= h($log->created) ?></td>
                <td><?= h($log->modified) ?></td>
                <td><?= h($log->avisos) ?></td>
                <td><?= h($log->mysql_log_id) ?></td>
                <td><?= h($log->ip) ?></td>
                <td><?= $log->has('curso') ? $this->Html->link($log->curso->id, ['controller' => 'Cursos', 'action' => 'view', $log->curso->id]) : '' ?></td>
                <td><?= $log->has('cursos_modulo') ? $this->Html->link($log->cursos_modulo->id, ['controller' => 'CursosModulos', 'action' => 'view', $log->cursos_modulo->id]) : '' ?></td>
                <td><?= $log->has('evento') ? $this->Html->link($log->evento->id, ['controller' => 'Eventos', 'action' => 'view', $log->evento->id]) : '' ?></td>
                <td><?= h($log->url) ?></td>
                <td><?= h($log->info) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $log->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $log->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $log->id], ['confirm' => __('Are you sure you want to delete # {0}?', $log->id)]) ?>
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
