<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserCadastro $userCadastro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userCadastro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userCadastro->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Cadastro'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userCadastro form large-9 medium-8 columns content">
    <?= $this->Form->create($userCadastro) ?>
    <fieldset>
        <legend><?= __('Edit User Cadastro') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('first_name');
            echo $this->Form->control('middle_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('rg');
            echo $this->Form->control('cpf');
            echo $this->Form->control('cep');
            echo $this->Form->control('numero_principal');
            echo $this->Form->control('numero_contato');
            echo $this->Form->control('info');
            echo $this->Form->control('modificadores_id', ['options' => $modificadores, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
