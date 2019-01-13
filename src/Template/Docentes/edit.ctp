<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Docente $docente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $docente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $docente->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Docentes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regras'), ['controller' => 'Regras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Regra'), ['controller' => 'Regras', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="docentes form large-9 medium-8 columns content">
    <?= $this->Form->create($docente) ?>
    <fieldset>
        <legend><?= __('Edit Docente') ?></legend>
        <?php
            echo $this->Form->control('tipo');
            echo $this->Form->control('presenca');
            echo $this->Form->control('pontuacao');
            echo $this->Form->control('distancia_casa_sede');
            echo $this->Form->control('avaliacao_alunos');
            echo $this->Form->control('avaliacao_dirigentes');
            echo $this->Form->control('dias_disponiveis');
            echo $this->Form->control('meus_alunos');
            echo $this->Form->control('conselheiro');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
