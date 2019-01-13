<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserCadastro $userCadastro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Cadastro'), ['action' => 'edit', $userCadastro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Cadastro'), ['action' => 'delete', $userCadastro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userCadastro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Cadastro'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Cadastro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userCadastro view large-9 medium-8 columns content">
    <h3><?= h($userCadastro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($userCadastro->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($userCadastro->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($userCadastro->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($userCadastro->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Middle Name') ?></th>
            <td><?= h($userCadastro->middle_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($userCadastro->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rg') ?></th>
            <td><?= h($userCadastro->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($userCadastro->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($userCadastro->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Principal') ?></th>
            <td><?= h($userCadastro->numero_principal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Contato') ?></th>
            <td><?= h($userCadastro->numero_contato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info') ?></th>
            <td><?= h($userCadastro->info) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificadore') ?></th>
            <td><?= $userCadastro->has('modificadore') ? $this->Html->link($userCadastro->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $userCadastro->modificadore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userCadastro->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userCadastro->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($userCadastro->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related User') ?></h4>
        <?php if (!empty($userCadastro->user)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Cadastro Id') ?></th>
                <th scope="col"><?= __('Perfis Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Remember Token') ?></th>
                <th scope="col"><?= __('Google') ?></th>
                <th scope="col"><?= __('Oauth Provider') ?></th>
                <th scope="col"><?= __('Primeiro Nome') ?></th>
                <th scope="col"><?= __('Meio Nome') ?></th>
                <th scope="col"><?= __('Ultimo Nome') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Locale') ?></th>
                <th scope="col"><?= __('Cover') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Photo Dir') ?></th>
                <th scope="col"><?= __('Photo Size') ?></th>
                <th scope="col"><?= __('Photo Type') ?></th>
                <th scope="col"><?= __('Link') ?></th>
                <th scope="col"><?= __('Info') ?></th>
                <th scope="col"><?= __('Sexo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($userCadastro->user as $user): ?>
            <tr>
                <td><?= h($user->id) ?></td>
                <td><?= h($user->user_cadastro_id) ?></td>
                <td><?= h($user->perfis_id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->remember_token) ?></td>
                <td><?= h($user->google) ?></td>
                <td><?= h($user->oauth_provider) ?></td>
                <td><?= h($user->primeiro_nome) ?></td>
                <td><?= h($user->meio_nome) ?></td>
                <td><?= h($user->ultimo_nome) ?></td>
                <td><?= h($user->gender) ?></td>
                <td><?= h($user->locale) ?></td>
                <td><?= h($user->cover) ?></td>
                <td><?= h($user->photo) ?></td>
                <td><?= h($user->photo_dir) ?></td>
                <td><?= h($user->photo_size) ?></td>
                <td><?= h($user->photo_type) ?></td>
                <td><?= h($user->link) ?></td>
                <td><?= h($user->info) ?></td>
                <td><?= h($user->sexo) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'User', 'action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'User', 'action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'User', 'action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
