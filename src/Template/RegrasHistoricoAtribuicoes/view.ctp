<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegrasHistoricoAtribuico $regrasHistoricoAtribuico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Regras Historico Atribuico'), ['action' => 'edit', $regrasHistoricoAtribuico->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Regras Historico Atribuico'), ['action' => 'delete', $regrasHistoricoAtribuico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $regrasHistoricoAtribuico->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Regras Historico Atribuicoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Regras Historico Atribuico'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Atribuicoes'), ['controller' => 'UserAtribuicoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Atribuico'), ['controller' => 'UserAtribuicoes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="regrasHistoricoAtribuicoes view large-9 medium-8 columns content">
    <h3><?= h($regrasHistoricoAtribuico->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User Atribuico') ?></th>
            <td><?= $regrasHistoricoAtribuico->has('user_atribuico') ? $this->Html->link($regrasHistoricoAtribuico->user_atribuico->id, ['controller' => 'UserAtribuicoes', 'action' => 'view', $regrasHistoricoAtribuico->user_atribuico->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info') ?></th>
            <td><?= h($regrasHistoricoAtribuico->info) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($regrasHistoricoAtribuico->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($regrasHistoricoAtribuico->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($regrasHistoricoAtribuico->modified) ?></td>
        </tr>
    </table>
</div>
