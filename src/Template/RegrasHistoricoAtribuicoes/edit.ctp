<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegrasHistoricoAtribuico $regrasHistoricoAtribuico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $regrasHistoricoAtribuico->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $regrasHistoricoAtribuico->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Regras Historico Atribuicoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User Atribuicoes'), ['controller' => 'UserAtribuicoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Atribuico'), ['controller' => 'UserAtribuicoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="regrasHistoricoAtribuicoes form large-9 medium-8 columns content">
    <?= $this->Form->create($regrasHistoricoAtribuico) ?>
    <fieldset>
        <legend><?= __('Edit Regras Historico Atribuico') ?></legend>
        <?php
            echo $this->Form->control('info');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
