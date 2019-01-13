<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposDeOutro $gruposDeOutro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Grupos De Outros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Outros'), ['controller' => 'Outros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Outro'), ['controller' => 'Outros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposDeOutros form large-9 medium-8 columns content">
    <?= $this->Form->create($gruposDeOutro) ?>
    <fieldset>
        <legend><?= __('Add Grupos De Outro') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
