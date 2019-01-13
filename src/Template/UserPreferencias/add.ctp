<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserPreferencia $userPreferencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User Preferencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userPreferencias form large-9 medium-8 columns content">
    <?= $this->Form->create($userPreferencia) ?>
    <fieldset>
        <legend><?= __('Add User Preferencia') ?></legend>
        <?php
            echo $this->Form->control('configuracoes');
            echo $this->Form->control('temas');
            echo $this->Form->control('plugins');
            echo $this->Form->control('temporarios');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
