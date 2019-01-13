<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notificaco $notificaco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $notificaco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $notificaco->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Notificacoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="notificacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($notificaco) ?>
    <fieldset>
        <legend><?= __('Edit Notificaco') ?></legend>
        <?php
            echo $this->Form->control('nao_visualizadas');
            echo $this->Form->control('instancias');
            echo $this->Form->control('tempo_medio_resposta');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
