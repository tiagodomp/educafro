<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aula $aula
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Aulas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Subtemas'), ['controller' => 'Subtemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtema'), ['controller' => 'Subtemas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aulas form large-9 medium-8 columns content">
    <?= $this->Form->create($aula) ?>
    <fieldset>
        <legend><?= __('Add Aula') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('titulo');
            echo $this->Form->control('inicio_aula', ['empty' => true]);
            echo $this->Form->control('final_aula', ['empty' => true]);
            echo $this->Form->control('docente_presente');
            echo $this->Form->control('discentes_presente');
            echo $this->Form->control('descricao');
            echo $this->Form->control('videoaula');
            echo $this->Form->control('material_apoio');
            echo $this->Form->control('bibliografia');
            echo $this->Form->control('entregar_trabalho', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
