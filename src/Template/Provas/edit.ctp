<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prova $prova
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prova->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prova->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Provas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['controller' => 'Disciplinas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplinas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="provas form large-9 medium-8 columns content">
    <?= $this->Form->create($prova) ?>
    <fieldset>
        <legend><?= __('Edit Prova') ?></legend>
        <?php
            echo $this->Form->control('tipo');
            echo $this->Form->control('provas_anima_id');
            echo $this->Form->control('provas');
            echo $this->Form->control('gabarito');
            echo $this->Form->control('notas');
            echo $this->Form->control('info_anima');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
