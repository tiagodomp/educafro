<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prova $prova
 */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Editar') ?></li>
        <li><?= $this->html->link(__('Usuários'), ['action' => 'index']) ?></li>
        <li><?= $this->Form->postLink(
                __('Editar'),
                ['action' => 'edit', $prova->id])?>
        </li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $prova->id],
                ['confirm' => __('Você realmente quer deletar esta prova ?')]
            )
            ?></li>
        <hr>
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
    <?= $this->Form->create($prova) ?>
    <fieldset>
        <legend><?= __('Edit Prova') ?></legend>
        <?php
            echo $this->Form->control('perfis_id', ['options' => $perfis]);
            echo $this->Form->control('materias_id', ['options' => $materias]);
            echo $this->Form->control('aplicada');
            echo $this->Form->control('nota');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
