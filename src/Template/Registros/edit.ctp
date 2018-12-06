<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Registro $registro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $registro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $registro->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Registros'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="registros form large-9 medium-8 columns content">
    <?= $this->Form->create($registro) ?>
    <fieldset>
        <legend><?= __('Edit Registro') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('cpf');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('registros');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
