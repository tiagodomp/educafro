<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegrasHierarquia $regrasHierarquia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $regrasHierarquia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $regrasHierarquia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Regras Hierarquias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Regras Permicao Crud'), ['controller' => 'RegrasPermicaoCrud', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Regras Permicao Crud'), ['controller' => 'RegrasPermicaoCrud', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="regrasHierarquias form large-9 medium-8 columns content">
    <?= $this->Form->create($regrasHierarquia) ?>
    <fieldset>
        <legend><?= __('Edit Regras Hierarquia') ?></legend>
        <?php
            echo $this->Form->control('hierarquia');
            echo $this->Form->control('observacao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
