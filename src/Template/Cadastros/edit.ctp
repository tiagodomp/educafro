<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cadastro $cadastro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cadastro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cadastro->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cadastros'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cadastros form large-9 medium-8 columns content">
    <?= $this->Form->create($cadastro) ?>
    <fieldset>
        <legend><?= __('Editar Cadastro') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('email');
            echo $this->Form->control('lembrar');
            echo $this->Form->control('password');
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('nome');
            echo $this->Form->control('rg');
            echo $this->Form->control('cpf');
            echo $this->Form->control('cep');
            echo $this->Form->control('registrosid');
            echo $this->Form->control('codigoid');
            echo $this->Form->control('perfisid');
            echo $this->Form->control('contatosid');
            echo $this->Form->control('ddd');
            echo $this->Form->control('numero');
            echo $this->Form->control('rolesid');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
