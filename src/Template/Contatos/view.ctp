<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contato $contato
 */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Editar') ?></li>
        <li><?= $this->html->link(__('Contatos'), ['action' => 'index']) ?></li>
        <li><?= $this->Form->postLink(
                __('Editar'),
                ['action' => 'edit', $contato->id])?>
        </li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $contato->id],
                ['confirm' => __('Você realmente quer deletar o número ({0}) {1} do {2}?',$contato->ddd,$contato->numero, $contato->perfi->nome)])?>
            
        </li>
        
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
<div class="users index large-10 medium-9 columns content">
    <h3><?= h($contato->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ddd') ?></th>
            <td><?= h($contato->ddd) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= h($contato->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Falarcom') ?></th>
            <td><?= h($contato->falarcom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aparelho') ?></th>
            <td><?= h($contato->aparelho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Perfi') ?></th>
            <td><?= $contato->has('perfi') ? $this->Html->link($contato->perfi->id, ['controller' => 'Perfis', 'action' => 'view', $contato->perfi->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contato->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $this->Number->format($contato->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contato->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($contato->modified) ?></td>
        </tr>
    </table>
</div>
