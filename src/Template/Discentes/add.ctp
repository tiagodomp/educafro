<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discente $discente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Discentes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regras'), ['controller' => 'Regras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Regra'), ['controller' => 'Regras', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="discentes form large-9 medium-8 columns content">
    <?= $this->Form->create($discente) ?>
    <fieldset>
        <legend><?= __('Add Discente') ?></legend>
        <?php
            echo $this->Form->control('tipo');
            echo $this->Form->control('ra');
            echo $this->Form->control('token_aluno');
            echo $this->Form->control('bonificacao');
            echo $this->Form->control('bonificacao_historico');
            echo $this->Form->control('aproveitamento');
            echo $this->Form->control('distancia_casa_sede');
            echo $this->Form->control('monitor');
            echo $this->Form->control('presenca');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
