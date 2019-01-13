<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aula $aula
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aula'), ['action' => 'edit', $aula->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aula'), ['action' => 'delete', $aula->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aula->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Aulas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aula'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtemas'), ['controller' => 'Subtemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtema'), ['controller' => 'Subtemas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aulas view large-9 medium-8 columns content">
    <h3><?= h($aula->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Subtema') ?></th>
            <td><?= $aula->has('subtema') ? $this->Html->link($aula->subtema->id, ['controller' => 'Subtemas', 'action' => 'view', $aula->subtema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($aula->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($aula->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discentes Presente') ?></th>
            <td><?= h($aula->discentes_presente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Videoaula') ?></th>
            <td><?= h($aula->videoaula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material Apoio') ?></th>
            <td><?= h($aula->material_apoio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bibliografia') ?></th>
            <td><?= h($aula->bibliografia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($aula->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inicio Aula') ?></th>
            <td><?= h($aula->inicio_aula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Final Aula') ?></th>
            <td><?= h($aula->final_aula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entregar Trabalho') ?></th>
            <td><?= h($aula->entregar_trabalho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($aula->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($aula->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Docente Presente') ?></th>
            <td><?= $aula->docente_presente ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($aula->descricao)); ?>
    </div>
</div>
