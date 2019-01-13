<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Codigo $codigo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Codigos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Codigos Tags'), ['controller' => 'CodigosTags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Codigos Tag'), ['controller' => 'CodigosTags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="codigos form large-9 medium-8 columns content">
    <?= $this->Form->create($codigo) ?>
    <fieldset>
        <legend><?= __('Add Codigo') ?></legend>
        <?php
            echo $this->Form->control('codigo');
            echo $this->Form->control('ativacao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
