<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdministradoresInfo $administradoresInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $administradoresInfo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $administradoresInfo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Administradores Info'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="administradoresInfo form large-9 medium-8 columns content">
    <?= $this->Form->create($administradoresInfo) ?>
    <fieldset>
        <legend><?= __('Edit Administradores Info') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
