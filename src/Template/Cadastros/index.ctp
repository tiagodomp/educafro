<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cadastro[]|\Cake\Collection\CollectionInterface $cadastros
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cadastro'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cadastros index large-9 medium-8 columns content">
    <h3><?= __('Cadastros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lembrar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registrosid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigoid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('perfisid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contatosid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ddd') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rolesid') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cadastros as $cadastro): ?>
            <tr>
                <td><?= $this->Number->format($cadastro->id) ?></td>
                <td><?= h($cadastro->username) ?></td>
                <td><?= h($cadastro->email) ?></td>
                <td><?= $this->Number->format($cadastro->lembrar) ?></td>
                <td><?= h($cadastro->password) ?></td>
                <td><?= h($cadastro->first_name) ?></td>
                <td><?= h($cadastro->last_name) ?></td>
                <td><?= h($cadastro->nome) ?></td>
                <td><?= h($cadastro->rg) ?></td>
                <td><?= h($cadastro->cpf) ?></td>
                <td><?= h($cadastro->cep) ?></td>
                <td><?= $this->Number->format($cadastro->registrosid) ?></td>
                <td><?= $this->Number->format($cadastro->codigoid) ?></td>
                <td><?= $this->Number->format($cadastro->perfisid) ?></td>
                <td><?= $this->Number->format($cadastro->contatosid) ?></td>
                <td><?= h($cadastro->ddd) ?></td>
                <td><?= h($cadastro->numero) ?></td>
                <td><?= $this->Number->format($cadastro->rolesid) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cadastro->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cadastro->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cadastro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadastro->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
