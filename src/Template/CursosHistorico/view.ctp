<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CursosHistorico $cursosHistorico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cursos Historico'), ['action' => 'edit', $cursosHistorico->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cursos Historico'), ['action' => 'delete', $cursosHistorico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cursosHistorico->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cursos Historico'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cursos Historico'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cursos Secoes'), ['controller' => 'CursosSecoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cursos Seco'), ['controller' => 'CursosSecoes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Log'), ['controller' => 'Log', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Log'), ['controller' => 'Log', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cursosHistorico view large-9 medium-8 columns content">
    <h3><?= h($cursosHistorico->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cursos Seco') ?></th>
            <td><?= $cursosHistorico->has('cursos_seco') ? $this->Html->link($cursosHistorico->cursos_seco->id, ['controller' => 'CursosSecoes', 'action' => 'view', $cursosHistorico->cursos_seco->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Log') ?></th>
            <td><?= $cursosHistorico->has('log') ? $this->Html->link($cursosHistorico->log->id, ['controller' => 'Log', 'action' => 'view', $cursosHistorico->log->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ultimo Status') ?></th>
            <td><?= h($cursosHistorico->ultimo_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Historico') ?></th>
            <td><?= h($cursosHistorico->historico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Historico Aproveitamento') ?></th>
            <td><?= h($cursosHistorico->historico_aproveitamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cursosHistorico->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ultima Data Iniciada') ?></th>
            <td><?= h($cursosHistorico->ultima_data_iniciada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ultima Data Finalizada') ?></th>
            <td><?= h($cursosHistorico->ultima_data_finalizada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cursosHistorico->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cursosHistorico->modified) ?></td>
        </tr>
    </table>
</div>
