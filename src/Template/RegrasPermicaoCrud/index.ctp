<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegrasPermicaoCrud[]|\Cake\Collection\CollectionInterface $regrasPermicaoCrud
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Regras Permicao Crud'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regras Hierarquias'), ['controller' => 'RegrasHierarquias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Regras Hierarquia'), ['controller' => 'RegrasHierarquias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="regrasPermicaoCrud index large-9 medium-8 columns content">
    <h3><?= __('Regras Permicao Crud') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('criar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('visualizar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('editar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deletar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($regrasPermicaoCrud as $regrasPermicaoCrud): ?>
            <tr>
                <td><?= $this->Number->format($regrasPermicaoCrud->id) ?></td>
                <td><?= h($regrasPermicaoCrud->criar) ?></td>
                <td><?= h($regrasPermicaoCrud->visualizar) ?></td>
                <td><?= h($regrasPermicaoCrud->editar) ?></td>
                <td><?= h($regrasPermicaoCrud->deletar) ?></td>
                <td><?= h($regrasPermicaoCrud->created) ?></td>
                <td><?= h($regrasPermicaoCrud->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $regrasPermicaoCrud->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $regrasPermicaoCrud->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $regrasPermicaoCrud->id], ['confirm' => __('Are you sure you want to delete # {0}?', $regrasPermicaoCrud->id)]) ?>
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
