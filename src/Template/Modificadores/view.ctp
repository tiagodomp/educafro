<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Modificadore $modificadore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Modificadore'), ['action' => 'edit', $modificadore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Modificadore'), ['action' => 'delete', $modificadore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modificadore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Modificadores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modificadore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Historico Acoes'), ['controller' => 'UserHistoricoAcoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Historico Aco'), ['controller' => 'UserHistoricoAcoes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="modificadores view large-9 medium-8 columns content">
    <h3><?= h($modificadore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User Historico Aco') ?></th>
            <td><?= $modificadore->has('user_historico_aco') ? $this->Html->link($modificadore->user_historico_aco->id, ['controller' => 'UserHistoricoAcoes', 'action' => 'view', $modificadore->user_historico_aco->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rastreador Rotas') ?></th>
            <td><?= h($modificadore->rastreador_rotas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($modificadore->id) ?></td>
        </tr>
    </table>
</div>
