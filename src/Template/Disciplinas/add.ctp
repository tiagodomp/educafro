<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disciplina $disciplina
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cursos Modulos'), ['controller' => 'CursosModulos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cursos Modulo'), ['controller' => 'CursosModulos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="disciplinas form large-9 medium-8 columns content">
    <?= $this->Form->create($disciplina) ?>
    <fieldset>
        <legend><?= __('Add Disciplina') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('icon');
            echo $this->Form->control('descricao');
            echo $this->Form->control('credito_aula');
            echo $this->Form->control('credito_trabalho');
            echo $this->Form->control('carga_horaria_total');
            echo $this->Form->control('setores_enem');
            echo $this->Form->control('ativar', ['empty' => true]);
            echo $this->Form->control('objetivos');
            echo $this->Form->control('programa_resumido');
            echo $this->Form->control('programa');
            echo $this->Form->control('avaliacao');
            echo $this->Form->control('metodo');
            echo $this->Form->control('criterio');
            echo $this->Form->control('recuperacao');
            echo $this->Form->control('bibliografia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
