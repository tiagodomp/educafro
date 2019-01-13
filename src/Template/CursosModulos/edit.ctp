<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CursosModulo $cursosModulo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cursosModulo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cursosModulo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cursos Modulos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cursosModulos form large-9 medium-8 columns content">
    <?= $this->Form->create($cursosModulo) ?>
    <fieldset>
        <legend><?= __('Edit Cursos Modulo') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('abreviacao');
            echo $this->Form->control('titulo');
            echo $this->Form->control('matriz_curricular');
            echo $this->Form->control('tipo');
            echo $this->Form->control('requisitos_deste_modulo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
