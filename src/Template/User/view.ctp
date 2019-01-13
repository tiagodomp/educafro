<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Cadastro'), ['controller' => 'UserCadastro', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Cadastro'), ['controller' => 'UserCadastro', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Perfis'), ['controller' => 'Perfis', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Perfi'), ['controller' => 'Perfis', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="user view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User Cadastro') ?></th>
            <td><?= $user->has('user_cadastro') ? $this->Html->link($user->user_cadastro->id, ['controller' => 'UserCadastro', 'action' => 'view', $user->user_cadastro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Perfi') ?></th>
            <td><?= $user->has('perfi') ? $this->Html->link($user->perfi->id, ['controller' => 'Perfis', 'action' => 'view', $user->perfi->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Remember Token') ?></th>
            <td><?= h($user->remember_token) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Google') ?></th>
            <td><?= h($user->google) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Oauth Provider') ?></th>
            <td><?= h($user->oauth_provider) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Primeiro Nome') ?></th>
            <td><?= h($user->primeiro_nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Meio Nome') ?></th>
            <td><?= h($user->meio_nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ultimo Nome') ?></th>
            <td><?= h($user->ultimo_nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($user->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locale') ?></th>
            <td><?= h($user->locale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cover') ?></th>
            <td><?= h($user->cover) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($user->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Dir') ?></th>
            <td><?= h($user->photo_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Type') ?></th>
            <td><?= h($user->photo_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($user->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info') ?></th>
            <td><?= h($user->info) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($user->sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Size') ?></th>
            <td><?= $this->Number->format($user->photo_size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
</div>
