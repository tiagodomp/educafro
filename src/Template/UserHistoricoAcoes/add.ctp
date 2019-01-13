<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserHistoricoAco $userHistoricoAco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User Historico Acoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Log'), ['controller' => 'Log', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Log'), ['controller' => 'Log', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userHistoricoAcoes form large-9 medium-8 columns content">
    <?= $this->Form->create($userHistoricoAco) ?>
    <fieldset>
        <legend><?= __('Add User Historico Aco') ?></legend>
        <?php
            echo $this->Form->control('acoes');
            echo $this->Form->control('acessos');
            echo $this->Form->control('uploads');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
