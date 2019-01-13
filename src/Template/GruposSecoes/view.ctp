<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposSeco $gruposSeco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grupos Seco'), ['action' => 'edit', $gruposSeco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grupos Seco'), ['action' => 'delete', $gruposSeco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposSeco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grupos Secoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupos Seco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gruposSecoes view large-9 medium-8 columns content">
    <h3><?= h($gruposSeco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Grupo') ?></th>
            <td><?= $gruposSeco->has('grupo') ? $this->Html->link($gruposSeco->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposSeco->grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($gruposSeco->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inscritos') ?></th>
            <td><?= h($gruposSeco->inscritos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pendentes') ?></th>
            <td><?= h($gruposSeco->pendentes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matriculados') ?></th>
            <td><?= h($gruposSeco->matriculados) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rejeitados') ?></th>
            <td><?= h($gruposSeco->rejeitados) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo Do Grupo') ?></th>
            <td><?= h($gruposSeco->codigo_do_grupo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($gruposSeco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($gruposSeco->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($gruposSeco->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($gruposSeco->descricao)); ?>
    </div>
</div>
