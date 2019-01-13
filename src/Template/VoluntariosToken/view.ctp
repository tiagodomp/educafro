<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VoluntariosToken $voluntariosToken
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Voluntarios Token'), ['action' => 'edit', $voluntariosToken->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Voluntarios Token'), ['action' => 'delete', $voluntariosToken->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voluntariosToken->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Voluntarios Token'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Voluntarios Token'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="voluntariosToken view large-9 medium-8 columns content">
    <h3><?= h($voluntariosToken->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Token') ?></th>
            <td><?= h($voluntariosToken->token) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instancia') ?></th>
            <td><?= h($voluntariosToken->instancia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ip Restricao') ?></th>
            <td><?= h($voluntariosToken->ip_restricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($voluntariosToken->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($voluntariosToken->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($voluntariosToken->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Info') ?></h4>
        <?= $this->Text->autoParagraph(h($voluntariosToken->info)); ?>
    </div>
</div>
