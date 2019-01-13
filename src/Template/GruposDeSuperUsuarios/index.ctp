<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GruposDeSuperUsuario[]|\Cake\Collection\CollectionInterface $gruposDeSuperUsuarios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Grupos De Super Usuario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Super Usuarios'), ['controller' => 'SuperUsuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Super Usuario'), ['controller' => 'SuperUsuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gruposDeSuperUsuarios index large-9 medium-8 columns content">
    <h3><?= __('Grupos De Super Usuarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('grupos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('super_usuarios_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gruposDeSuperUsuarios as $gruposDeSuperUsuario): ?>
            <tr>
                <td><?= $gruposDeSuperUsuario->has('grupo') ? $this->Html->link($gruposDeSuperUsuario->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $gruposDeSuperUsuario->grupo->id]) : '' ?></td>
                <td><?= $gruposDeSuperUsuario->has('super_usuario') ? $this->Html->link($gruposDeSuperUsuario->super_usuario->id, ['controller' => 'SuperUsuarios', 'action' => 'view', $gruposDeSuperUsuario->super_usuario->id]) : '' ?></td>
                <td><?= h($gruposDeSuperUsuario->created) ?></td>
                <td><?= h($gruposDeSuperUsuario->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gruposDeSuperUsuario->grupos_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gruposDeSuperUsuario->grupos_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gruposDeSuperUsuario->grupos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposDeSuperUsuario->grupos_id)]) ?>
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
