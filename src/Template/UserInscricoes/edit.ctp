<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserInscrico $userInscrico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userInscrico->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userInscrico->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Inscricoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userInscricoes form large-9 medium-8 columns content">
    <?= $this->Form->create($userInscrico) ?>
    <fieldset>
        <legend><?= __('Edit User Inscrico') ?></legend>
        <?php
            echo $this->Form->control('autorizado');
            echo $this->Form->control('inscricoes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
