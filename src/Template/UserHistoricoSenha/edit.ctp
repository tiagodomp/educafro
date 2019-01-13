<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserHistoricoSenha $userHistoricoSenha
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userHistoricoSenha->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userHistoricoSenha->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Historico Senha'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userHistoricoSenha form large-9 medium-8 columns content">
    <?= $this->Form->create($userHistoricoSenha) ?>
    <fieldset>
        <legend><?= __('Edit User Historico Senha') ?></legend>
        <?php
            echo $this->Form->control('senhas');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
