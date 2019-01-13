<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Docente[]|\Cake\Collection\CollectionInterface $docentes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Docente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regras'), ['controller' => 'Regras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Regra'), ['controller' => 'Regras', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="docentes index large-9 medium-8 columns content">
    <h3><?= __('Docentes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('regras_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('presenca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pontuacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('distancia_casa_sede') ?></th>
                <th scope="col"><?= $this->Paginator->sort('avaliacao_alunos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('avaliacao_dirigentes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dias_disponiveis') ?></th>
                <th scope="col"><?= $this->Paginator->sort('meus_alunos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('conselheiro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($docentes as $docente): ?>
            <tr>
                <td><?= $this->Number->format($docente->id) ?></td>
                <td><?= $docente->has('user') ? $this->Html->link($docente->user->id, ['controller' => 'User', 'action' => 'view', $docente->user->id]) : '' ?></td>
                <td><?= $docente->has('regra') ? $this->Html->link($docente->regra->id, ['controller' => 'Regras', 'action' => 'view', $docente->regra->id]) : '' ?></td>
                <td><?= h($docente->tipo) ?></td>
                <td><?= h($docente->presenca) ?></td>
                <td><?= $this->Number->format($docente->pontuacao) ?></td>
                <td><?= h($docente->distancia_casa_sede) ?></td>
                <td><?= h($docente->avaliacao_alunos) ?></td>
                <td><?= h($docente->avaliacao_dirigentes) ?></td>
                <td><?= h($docente->dias_disponiveis) ?></td>
                <td><?= h($docente->meus_alunos) ?></td>
                <td><?= h($docente->conselheiro) ?></td>
                <td><?= h($docente->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $docente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $docente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $docente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $docente->id)]) ?>
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
