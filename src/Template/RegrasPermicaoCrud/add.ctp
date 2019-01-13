<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegrasPermicaoCrud $regrasPermicaoCrud
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Regras Permicao Crud'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Regras Hierarquias'), ['controller' => 'RegrasHierarquias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Regras Hierarquia'), ['controller' => 'RegrasHierarquias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="regrasPermicaoCrud form large-9 medium-8 columns content">
    <?= $this->Form->create($regrasPermicaoCrud) ?>
    <fieldset>
        <legend><?= __('Add Regras Permicao Crud') ?></legend>
        <?php
            echo $this->Form->control('criar');
            echo $this->Form->control('visualizar');
            echo $this->Form->control('editar');
            echo $this->Form->control('deletar');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
