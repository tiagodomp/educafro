<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Editar') ?></li>
        <li><?= $this->html->link(__('Cargos'), ['action' => 'index']) ?></li>
        <li><?= $this->Form->postLink(
                __('Visualizar'),
                ['action' => 'view', $role->id])?>
        </li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $role->id],
                ['confirm' => __('Você realmente quer deletar o cargo {0}?', $role->role)])?>
        </li>
        
        <li class="heading"><?= __('Ações Gerais') ?></li>
        <li><?= $this->Html->link(__('Novo Usuário'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Visualizar Usuários'), ['controller' => 'Users','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Atribuir Perfil'), ['controller' => 'Perfis', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Visualizar Perfis'), ['controller' => 'Perfis', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Atribuir Contato'), ['controller' => 'Contatos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Visualizar Códigos ITA.AFRO'), ['controller' => 'Codigos', 'action' => 'codeIta']) ?></li>
        <li><?= $this->Html->link(__('Visualizar Códigos MED.AFRO'), ['controller' => 'Codigos', 'action' => 'codeMed']) ?></li>
    </ul>
</nav>
<div class="users index large-10 medium-9 columns content">
    <?= $this->Form->create($role) ?>
    <fieldset>
        <legend><?= __('Editar Cargo') ?></legend>
        <?php
            echo $this->Form->control('role');
            echo $this->Form->control('somatoria');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
