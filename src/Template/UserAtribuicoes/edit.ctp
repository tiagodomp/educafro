<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAtribuico $userAtribuico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userAtribuico->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userAtribuico->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Atribuicoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userAtribuicoes form large-9 medium-8 columns content">
    <?= $this->Form->create($userAtribuico) ?>
    <fieldset>
        <legend><?= __('Edit User Atribuico') ?></legend>
        <?php
            echo $this->Form->control('acao');
            echo $this->Form->control('titulo');
            echo $this->Form->control('eventos_id', ['options' => $eventos, 'empty' => true]);
            echo $this->Form->control('info');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
