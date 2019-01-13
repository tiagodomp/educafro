<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PerfisUpload $perfisUpload
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $perfisUpload->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $perfisUpload->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Perfis Upload'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Perfis'), ['controller' => 'Perfis', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Perfi'), ['controller' => 'Perfis', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="perfisUpload form large-9 medium-8 columns content">
    <?= $this->Form->create($perfisUpload) ?>
    <fieldset>
        <legend><?= __('Edit Perfis Upload') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
