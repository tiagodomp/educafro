<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Curso $curso
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cursos form large-9 medium-8 columns content">
    <?= $this->Form->create($curso) ?>
    <fieldset>
        <legend><?= __('Add Curso') ?></legend>
        <?php
            echo $this->Form->control('logo');
            echo $this->Form->control('nome');
            echo $this->Form->control('titulo');
            echo $this->Form->control('img');
            echo $this->Form->control('visivel');
            echo $this->Form->control('descricao');
            echo $this->Form->control('descricao_html');
            echo $this->Form->control('objetivo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
