<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cadastro $cadastro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cadastro'), ['action' => 'edit', $cadastro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cadastro'), ['action' => 'delete', $cadastro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadastro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cadastros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cadastro'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cadastros view large-9 medium-8 columns content">
    <h3><?= h($cadastro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($cadastro->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($cadastro->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($cadastro->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($cadastro->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($cadastro->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($cadastro->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rg') ?></th>
            <td><?= h($cadastro->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($cadastro->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($cadastro->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ddd') ?></th>
            <td><?= h($cadastro->ddd) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= h($cadastro->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cadastro->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lembrar') ?></th>
            <td><?= $this->Number->format($cadastro->lembrar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Registrosid') ?></th>
            <td><?= $this->Number->format($cadastro->registrosid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigoid') ?></th>
            <td><?= $this->Number->format($cadastro->codigoid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Perfisid') ?></th>
            <td><?= $this->Number->format($cadastro->perfisid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contatosid') ?></th>
            <td><?= $this->Number->format($cadastro->contatosid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rolesid') ?></th>
            <td><?= $this->Number->format($cadastro->rolesid) ?></td>
        </tr>
    </table>
</div>
