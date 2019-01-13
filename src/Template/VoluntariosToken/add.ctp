<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VoluntariosToken $voluntariosToken
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Voluntarios Token'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="voluntariosToken form large-9 medium-8 columns content">
    <?= $this->Form->create($voluntariosToken) ?>
    <fieldset>
        <legend><?= __('Add Voluntarios Token') ?></legend>
        <?php
            echo $this->Form->control('token');
            echo $this->Form->control('instancia');
            echo $this->Form->control('ip_restricao');
            echo $this->Form->control('info');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
