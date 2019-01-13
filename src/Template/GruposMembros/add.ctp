<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposMembro $gruposMembro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Grupos Membros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposMembros form large-9 medium-8 columns content">
    <?= $this->Form->create($gruposMembro) ?>
    <fieldset>
        <legend><?= __('Add Grupos Membro') ?></legend>
        <?php
            echo $this->Form->control('membros');
            echo $this->Form->control('path');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
