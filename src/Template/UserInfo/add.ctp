<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserInfo $userInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User Info'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userInfo form large-9 medium-8 columns content">
    <?= $this->Form->create($userInfo) ?>
    <fieldset>
        <legend><?= __('Add User Info') ?></legend>
        <?php
            echo $this->Form->control('info_pessoal');
            echo $this->Form->control('info_sistema');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
