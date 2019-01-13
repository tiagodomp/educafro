<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CursosSeco $cursosSeco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cursos Secoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cursosSecoes form large-9 medium-8 columns content">
    <?= $this->Form->create($cursosSeco) ?>
    <fieldset>
        <legend><?= __('Add Cursos Seco') ?></legend>
        <?php
            echo $this->Form->control('tipo');
            echo $this->Form->control('quantas');
            echo $this->Form->control('docentes');
            echo $this->Form->control('discentes');
            echo $this->Form->control('data_inicio_modulo');
            echo $this->Form->control('data_final_modulo');
            echo $this->Form->control('codigo_turma');
            echo $this->Form->control('vagas');
            echo $this->Form->control('carga_horaria');
            echo $this->Form->control('prox_secao', ['empty' => true]);
            echo $this->Form->control('visivel');
            echo $this->Form->control('data_inicio_cadastro', ['empty' => true]);
            echo $this->Form->control('data_final_cadastro', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
