<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegrasHierarquia[]|\Cake\Collection\CollectionInterface $regrasHierarquias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Regras Hierarquia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regras Permicao Crud'), ['controller' => 'RegrasPermicaoCrud', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Regras Permicao Crud'), ['controller' => 'RegrasPermicaoCrud', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="regrasHierarquias index large-9 medium-8 columns content">
    <h3><?= __('Regras Hierarquias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('regras_permicao_crud_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificadores_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hierarquia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($regrasHierarquias as $regrasHierarquia): ?>
            <tr>
                <td><?= $this->Number->format($regrasHierarquia->id) ?></td>
                <td><?= $regrasHierarquia->has('regras_permicao_crud') ? $this->Html->link($regrasHierarquia->regras_permicao_crud->id, ['controller' => 'RegrasPermicaoCrud', 'action' => 'view', $regrasHierarquia->regras_permicao_crud->id]) : '' ?></td>
                <td><?= $regrasHierarquia->has('modificadore') ? $this->Html->link($regrasHierarquia->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $regrasHierarquia->modificadore->id]) : '' ?></td>
                <td><?= $this->Number->format($regrasHierarquia->hierarquia) ?></td>
                <td><?= h($regrasHierarquia->created) ?></td>
                <td><?= h($regrasHierarquia->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $regrasHierarquia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $regrasHierarquia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $regrasHierarquia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $regrasHierarquia->id)]) ?>
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
