<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Log $log
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Log'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cursos Modulos'), ['controller' => 'CursosModulos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cursos Modulo'), ['controller' => 'CursosModulos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cursos Historico'), ['controller' => 'CursosHistorico', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cursos Historico'), ['controller' => 'CursosHistorico', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos Historico'), ['controller' => 'GruposHistorico', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupos Historico'), ['controller' => 'GruposHistorico', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Historico Acoes'), ['controller' => 'UserHistoricoAcoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Historico Aco'), ['controller' => 'UserHistoricoAcoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="log form large-9 medium-8 columns content">
    <?= $this->Form->create($log) ?>
    <fieldset>
        <legend><?= __('Add Log') ?></legend>
        <?php
            echo $this->Form->control('user_id');
            echo $this->Form->control('avisos');
            echo $this->Form->control('mysql_log_id');
            echo $this->Form->control('ip');
            echo $this->Form->control('cursos_id', ['options' => $cursos, 'empty' => true]);
            echo $this->Form->control('cursos_modulo_id', ['options' => $cursosModulos, 'empty' => true]);
            echo $this->Form->control('eventos_id', ['options' => $eventos, 'empty' => true]);
            echo $this->Form->control('url');
            echo $this->Form->control('info');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
