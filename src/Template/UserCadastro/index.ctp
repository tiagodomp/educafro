<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserCadastro[]|\Cake\Collection\CollectionInterface $userCadastro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Cadastro'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userCadastro index large-9 medium-8 columns content">
    <h3><?= __('User Cadastro') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('middle_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_principal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_contato') ?></th>
                <th scope="col"><?= $this->Paginator->sort('info') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificadores_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userCadastro as $userCadastro): ?>
            <tr>
                <td><?= $this->Number->format($userCadastro->id) ?></td>
                <td><?= h($userCadastro->username) ?></td>
                <td><?= h($userCadastro->email) ?></td>
                <td><?= h($userCadastro->password) ?></td>
                <td><?= h($userCadastro->first_name) ?></td>
                <td><?= h($userCadastro->middle_name) ?></td>
                <td><?= h($userCadastro->last_name) ?></td>
                <td><?= h($userCadastro->rg) ?></td>
                <td><?= h($userCadastro->cpf) ?></td>
                <td><?= h($userCadastro->cep) ?></td>
                <td><?= h($userCadastro->numero_principal) ?></td>
                <td><?= h($userCadastro->numero_contato) ?></td>
                <td><?= h($userCadastro->info) ?></td>
                <td><?= $userCadastro->has('modificadore') ? $this->Html->link($userCadastro->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $userCadastro->modificadore->id]) : '' ?></td>
                <td><?= h($userCadastro->created) ?></td>
                <td><?= h($userCadastro->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userCadastro->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userCadastro->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userCadastro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userCadastro->id)]) ?>
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
