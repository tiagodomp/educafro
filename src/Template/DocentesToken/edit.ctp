<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DocentesToken $docentesToken
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $docentesToken->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $docentesToken->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Docentes Token'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Docentes'), ['controller' => 'Docentes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Docente'), ['controller' => 'Docentes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="docentesToken form large-9 medium-8 columns content">
    <?= $this->Form->create($docentesToken) ?>
    <fieldset>
        <legend><?= __('Edit Docentes Token') ?></legend>
        <?php
            echo $this->Form->control('token');
            echo $this->Form->control('senhas');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
