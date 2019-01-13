<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Cadastro'), ['controller' => 'UserCadastro', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Cadastro'), ['controller' => 'UserCadastro', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Perfis'), ['controller' => 'Perfis', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Perfi'), ['controller' => 'Perfis', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="user index large-9 medium-8 columns content">
    <h3><?= __('User') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_cadastro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('perfis_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('remember_token') ?></th>
                <th scope="col"><?= $this->Paginator->sort('google') ?></th>
                <th scope="col"><?= $this->Paginator->sort('oauth_provider') ?></th>
                <th scope="col"><?= $this->Paginator->sort('primeiro_nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('meio_nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ultimo_nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('locale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cover') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('info') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($user as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= $user->has('user_cadastro') ? $this->Html->link($user->user_cadastro->id, ['controller' => 'UserCadastro', 'action' => 'view', $user->user_cadastro->id]) : '' ?></td>
                <td><?= $user->has('perfi') ? $this->Html->link($user->perfi->id, ['controller' => 'Perfis', 'action' => 'view', $user->perfi->id]) : '' ?></td>
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
                <td><?= $this->Number->format($user->photo_size) ?></td>
                <td><?= h($user->photo_type) ?></td>
                <td><?= h($user->link) ?></td>
                <td><?= h($user->info) ?></td>
                <td><?= h($user->sexo) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
