<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prova $prova
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Editar') ?></li>
        <li><?= $this->html->link(__('Usuários'), ['action' => 'index']) ?></li>
        <li><?= $this->Form->postLink(
                __('Editar'),
                ['action' => 'edit', $prova->id])?>
        </li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $prova->id],
                ['confirm' => __('Você realmente quer deletar esta prova ?')]
            )
            ?></li>
        <hr>
        <li class="heading"><?= __('Ações Gerais') ?></li>
        <li><?= $this->Html->link(__('Novo Usuário'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Visualizar Usuários'), ['controller' => 'Users','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Atribuir Perfil'), ['controller' => 'Perfis', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Visualizar Perfis'), ['controller' => 'Perfis', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Atribuir Contato'), ['controller' => 'Contatos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Visualizar Códigos ITA.AFRO'), ['controller' => 'Codigos', 'action' => 'codeIta']) ?></li>
        <li><?= $this->Html->link(__('Visualizar Códigos MED.AFRO'), ['controller' => 'Codigos', 'action' => 'codeMed']) ?></li>
    </ul>
</nav>
<div class="provas view large-9 medium-8 columns content">
    <h3><?= h($prova->id) ?></h3>
    <table class="vertical-table">
        
        <tr>
            <th scope="row"><?= __('Matéria') ?></th>
            <td><?= $prova->has('materia') ? $this->Html->link($prova->materia->id, ['controller' => 'Materias', 'action' => 'view', $prova->materia->nome]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aluno') ?></th>
            <td><?= $prova->has('perfi') ? $this->Html->link($prova->perfi->nome, ['controller' => 'Perfis', 'action' => 'view', $prova->perfi->nome]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nota') ?></th>
            <td><?= $this->Number->format($prova->nota) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data e Hora que foi aplicada') ?></th>
            <td><?= h($prova->aplicada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Foi alterada') ?></th>
            <td><?= h($prova->modified) ?></td>
        </tr>
    </table>
</div>
