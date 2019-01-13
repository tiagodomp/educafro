<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SuperUsuario $superUsuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Super Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regras'), ['controller' => 'Regras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Regra'), ['controller' => 'Regras', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="superUsuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($superUsuario) ?>
    <fieldset>
        <legend><?= __('Add Super Usuario') ?></legend>
        <?php
            echo $this->Form->control('tipo');
            echo $this->Form->control('presenca');
            echo $this->Form->control('pontuacao');
            echo $this->Form->control('bonificacao');
            echo $this->Form->control('bonificacao_historico');
            echo $this->Form->control('distancia_casa_sede');
            echo $this->Form->control('auto_avaliacao');
            echo $this->Form->control('avaliacao_equipe');
            echo $this->Form->control('avaliacao_administradores');
            echo $this->Form->control('dias_disponiveis');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
