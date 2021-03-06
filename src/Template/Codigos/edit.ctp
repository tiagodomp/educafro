<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Codigo $codigo
 */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Editar') ?></li>
        <li><?= $this->html->link(__('Códigos'), ['action' => 'index']) ?></li>
        <li><?= $this->Form->postLink(
                __('Visualizar'),
                ['action' => 'view', $codigo->id])?>
        </li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $codigo->id],
                ['confirm' => __('Você realmente quer deletar o código: {0}?', $codigo->code)])?>
        </li>
        
        <li class="heading"><?= __('Ações Gerais') ?></li>
        <li><?= $this->Html->link(__('Novo Usuário'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Visualizar Usuários'), ['controller' => 'Users','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Atribuir Perfil'), ['controller' => 'Perfis', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Visualizar Perfis'), ['controller' => 'Perfis', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Atribuir Contato'), ['controller' => 'Contatos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Visualizar Códigos ITA.AFRO'), ['controller' => 'Codigos', 'action' => 'ita']) ?></li>
        <li><?= $this->Html->link(__('Visualizar Códigos MED.AFRO'), ['controller' => 'Codigos', 'action' => 'med']) ?></li>
    </ul>
</nav>
<div class="users index large-10 medium-9 columns content">
    <?= $this->Form->create($codigo) ?>
    <fieldset>
        <legend><?= __('Editar Código') ?></legend>
        <?php
            echo $this->Form->control('code');
            echo $this->Form->control('ativacao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
