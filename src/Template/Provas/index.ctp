<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prova[]|\Cake\Collection\CollectionInterface $provas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Prova'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['controller' => 'Disciplinas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplinas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="provas index large-9 medium-8 columns content">
    <h3><?= __('Provas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disciplinas_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('provas_anima_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('provas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gabarito') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('info_anima') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificadores_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($provas as $prova): ?>
            <tr>
                <td><?= $this->Number->format($prova->id) ?></td>
                <td><?= $prova->has('disciplina') ? $this->Html->link($prova->disciplina->id, ['controller' => 'Disciplinas', 'action' => 'view', $prova->disciplina->id]) : '' ?></td>
                <td><?= h($prova->tipo) ?></td>
                <td><?= h($prova->provas_anima_id) ?></td>
                <td><?= h($prova->provas) ?></td>
                <td><?= h($prova->gabarito) ?></td>
                <td><?= h($prova->notas) ?></td>
                <td><?= h($prova->info_anima) ?></td>
                <td><?= h($prova->created) ?></td>
                <td><?= h($prova->modified) ?></td>
                <td><?= $prova->has('modificadore') ? $this->Html->link($prova->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $prova->modificadore->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $prova->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prova->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prova->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prova->id)]) ?>
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
