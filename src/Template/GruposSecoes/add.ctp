<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposSeco $gruposSeco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Grupos Secoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposSecoes form large-9 medium-8 columns content">
    <?= $this->Form->create($gruposSeco) ?>
    <fieldset>
        <legend><?= __('Add Grupos Seco') ?></legend>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('inscritos');
            echo $this->Form->control('pendentes');
            echo $this->Form->control('matriculados');
            echo $this->Form->control('rejeitados');
            echo $this->Form->control('descricao');
            echo $this->Form->control('codigo_do_grupo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
