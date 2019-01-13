<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SuperUsuariosAco[]|\Cake\Collection\CollectionInterface $superUsuariosAcoes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Super Usuarios Aco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Super Usuarios'), ['controller' => 'SuperUsuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Super Usuario'), ['controller' => 'SuperUsuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="superUsuariosAcoes index large-9 medium-8 columns content">
    <h3><?= __('Super Usuarios Acoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('super_usuarios_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($superUsuariosAcoes as $superUsuariosAco): ?>
            <tr>
                <td><?= $this->Number->format($superUsuariosAco->id) ?></td>
                <td><?= $superUsuariosAco->has('super_usuario') ? $this->Html->link($superUsuariosAco->super_usuario->id, ['controller' => 'SuperUsuarios', 'action' => 'view', $superUsuariosAco->super_usuario->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $superUsuariosAco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $superUsuariosAco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $superUsuariosAco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $superUsuariosAco->id)]) ?>
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
