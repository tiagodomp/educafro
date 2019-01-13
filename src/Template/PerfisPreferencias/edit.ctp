<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PerfisPreferencia $perfisPreferencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $perfisPreferencia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $perfisPreferencia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Perfis Preferencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Perfis'), ['controller' => 'Perfis', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Perfi'), ['controller' => 'Perfis', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="perfisPreferencias form large-9 medium-8 columns content">
    <?= $this->Form->create($perfisPreferencia) ?>
    <fieldset>
        <legend><?= __('Edit Perfis Preferencia') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
