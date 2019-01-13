<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notificaco $notificaco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Notificaco'), ['action' => 'edit', $notificaco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Notificaco'), ['action' => 'delete', $notificaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notificaco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Notificacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notificaco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="notificacoes view large-9 medium-8 columns content">
    <h3><?= h($notificaco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $notificaco->has('user') ? $this->Html->link($notificaco->user->id, ['controller' => 'User', 'action' => 'view', $notificaco->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instancias') ?></th>
            <td><?= h($notificaco->instancias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($notificaco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nao Visualizadas') ?></th>
            <td><?= $this->Number->format($notificaco->nao_visualizadas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempo Medio Resposta') ?></th>
            <td><?= $this->Number->format($notificaco->tempo_medio_resposta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($notificaco->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($notificaco->modified) ?></td>
        </tr>
    </table>
</div>
