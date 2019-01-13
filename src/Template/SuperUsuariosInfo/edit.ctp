<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SuperUsuariosInfo $superUsuariosInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $superUsuariosInfo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $superUsuariosInfo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Super Usuarios Info'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="superUsuariosInfo form large-9 medium-8 columns content">
    <?= $this->Form->create($superUsuariosInfo) ?>
    <fieldset>
        <legend><?= __('Edit Super Usuarios Info') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
