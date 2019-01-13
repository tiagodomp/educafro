<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposDeVoluntario $gruposDeVoluntario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gruposDeVoluntario->grupos_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gruposDeVoluntario->grupos_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Grupos De Voluntarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Voluntarios'), ['controller' => 'Voluntarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Voluntario'), ['controller' => 'Voluntarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposDeVoluntarios form large-9 medium-8 columns content">
    <?= $this->Form->create($gruposDeVoluntario) ?>
    <fieldset>
        <legend><?= __('Edit Grupos De Voluntario') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
