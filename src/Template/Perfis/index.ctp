<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Perfi[]|\Cake\Collection\CollectionInterface $perfis
 */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
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
<div class="perfis index large-10 medium-9 columns content">
    <h3><?= __('Perfis') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('RG') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CPF') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Endereço') ?></th>
                <th scope="col"><?= $this->Paginator->sort('número') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Estado') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($perfis as $perfi): ?>
            <tr>
                <td><?= h($perfi->nome) ?></td>
                <td><?= h($perfi->rg) ?></td>
                <td><?= h($perfi->cpf) ?></td>
                <td><?= h($perfi->cep) ?></td>
                <td><?= h($perfi->endereco) ?></td>
                <td><?= h($perfi->endereconum) ?></td>
                <td><?= h($perfi->bairro) ?></td>
                <td><?= h($perfi->cidade) ?></td>
                <td><?= h($perfi->estado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $perfi->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $perfi->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $perfi->id], ['confirm' => __('Você realmente quer deletar o perfil do usuário {0}?', $perfi->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
