<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposDeDocente $gruposDeDocente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gruposDeDocente->grupos_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gruposDeDocente->grupos_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Grupos De Docentes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Docentes'), ['controller' => 'Docentes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Docente'), ['controller' => 'Docentes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposDeDocentes form large-9 medium-8 columns content">
    <?= $this->Form->create($gruposDeDocente) ?>
    <fieldset>
        <legend><?= __('Edit Grupos De Docente') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
