<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CursosInfo $cursosInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cursos Info'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cursosInfo form large-9 medium-8 columns content">
    <?= $this->Form->create($cursosInfo) ?>
    <fieldset>
        <legend><?= __('Add Cursos Info') ?></legend>
        <?php
            echo $this->Form->control('documentacao_requisitada');
            echo $this->Form->control('nivel');
            echo $this->Form->control('tipo');
            echo $this->Form->control('visivel');
            echo $this->Form->control('info');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
