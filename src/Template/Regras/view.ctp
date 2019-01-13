<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Regra $regra
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Regra'), ['action' => 'edit', $regra->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Regra'), ['action' => 'delete', $regra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $regra->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Regras'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Regra'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regras Hierarquias'), ['controller' => 'RegrasHierarquias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Regras Hierarquia'), ['controller' => 'RegrasHierarquias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="regras view large-9 medium-8 columns content">
    <h3><?= h($regra->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Grupo') ?></th>
            <td><?= $regra->has('grupo') ? $this->Html->link($regra->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $regra->grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Regras Hierarquia') ?></th>
            <td><?= $regra->has('regras_hierarquia') ? $this->Html->link($regra->regras_hierarquia->id, ['controller' => 'RegrasHierarquias', 'action' => 'view', $regra->regras_hierarquia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cargo') ?></th>
            <td><?= h($regra->cargo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($regra->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info') ?></th>
            <td><?= h($regra->info) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificadore') ?></th>
            <td><?= $regra->has('modificadore') ? $this->Html->link($regra->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $regra->modificadore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($regra->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($regra->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($regra->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($regra->descricao)); ?>
    </div>
</div>
