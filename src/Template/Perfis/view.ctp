<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Perfi $perfi
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Perfi'), ['action' => 'edit', $perfi->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Perfi'), ['action' => 'delete', $perfi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perfi->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Perfis'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Perfi'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="perfis view large-9 medium-8 columns content">
    <h3><?= h($perfi->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Social') ?></th>
            <td><?= h($perfi->nome_social) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contatos') ?></th>
            <td><?= h($perfi->contatos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Facebook') ?></th>
            <td><?= h($perfi->facebook) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Curriculo Lattes') ?></th>
            <td><?= h($perfi->curriculo_lattes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Curriculo Upload') ?></th>
            <td><?= h($perfi->curriculo_upload) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pictures') ?></th>
            <td><?= h($perfi->pictures) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rg') ?></th>
            <td><?= h($perfi->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($perfi->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($perfi->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= h($perfi->endereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco Num') ?></th>
            <td><?= h($perfi->endereco_num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($perfi->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($perfi->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($perfi->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modo Template') ?></th>
            <td><?= h($perfi->modo_template) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Auto Declaracao') ?></th>
            <td><?= h($perfi->auto_declaracao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Banca Verificacao') ?></th>
            <td><?= h($perfi->banca_verificacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deficiencia') ?></th>
            <td><?= h($perfi->deficiencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transporte Publico') ?></th>
            <td><?= h($perfi->transporte_publico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Religiao') ?></th>
            <td><?= h($perfi->religiao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($perfi->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($perfi->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($perfi->modified) ?></td>
        </tr>
    </table>
</div>
