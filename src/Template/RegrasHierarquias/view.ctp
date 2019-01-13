<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegrasHierarquia $regrasHierarquia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Regras Hierarquia'), ['action' => 'edit', $regrasHierarquia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Regras Hierarquia'), ['action' => 'delete', $regrasHierarquia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $regrasHierarquia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Regras Hierarquias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Regras Hierarquia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regras Permicao Crud'), ['controller' => 'RegrasPermicaoCrud', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Regras Permicao Crud'), ['controller' => 'RegrasPermicaoCrud', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="regrasHierarquias view large-9 medium-8 columns content">
    <h3><?= h($regrasHierarquia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Regras Permicao Crud') ?></th>
            <td><?= $regrasHierarquia->has('regras_permicao_crud') ? $this->Html->link($regrasHierarquia->regras_permicao_crud->id, ['controller' => 'RegrasPermicaoCrud', 'action' => 'view', $regrasHierarquia->regras_permicao_crud->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificadore') ?></th>
            <td><?= $regrasHierarquia->has('modificadore') ? $this->Html->link($regrasHierarquia->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $regrasHierarquia->modificadore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($regrasHierarquia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hierarquia') ?></th>
            <td><?= $this->Number->format($regrasHierarquia->hierarquia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($regrasHierarquia->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($regrasHierarquia->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observacao') ?></h4>
        <?= $this->Text->autoParagraph(h($regrasHierarquia->observacao)); ?>
    </div>
</div>
