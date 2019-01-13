<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdministradoresToken $administradoresToken
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $administradoresToken->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $administradoresToken->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Administradores Tokens'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Administradores'), ['controller' => 'Administradores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Administradore'), ['controller' => 'Administradores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="administradoresTokens form large-9 medium-8 columns content">
    <?= $this->Form->create($administradoresToken) ?>
    <fieldset>
        <legend><?= __('Edit Administradores Token') ?></legend>
        <?php
            echo $this->Form->control('token');
            echo $this->Form->control('instancia');
            echo $this->Form->control('ip_restricao');
            echo $this->Form->control('info');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
