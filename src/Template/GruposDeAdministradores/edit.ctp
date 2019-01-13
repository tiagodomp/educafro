<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposDeAdministradore $gruposDeAdministradore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gruposDeAdministradore->grupos_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gruposDeAdministradore->grupos_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Grupos De Administradores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Administradores'), ['controller' => 'Administradores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Administradore'), ['controller' => 'Administradores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposDeAdministradores form large-9 medium-8 columns content">
    <?= $this->Form->create($gruposDeAdministradore) ?>
    <fieldset>
        <legend><?= __('Edit Grupos De Administradore') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
