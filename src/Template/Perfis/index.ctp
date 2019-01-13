<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Perfi[]|\Cake\Collection\CollectionInterface $perfis
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Perfi'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="perfis index large-9 medium-8 columns content">
    <h3><?= __('Perfis') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_social') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contatos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('facebook') ?></th>
                <th scope="col"><?= $this->Paginator->sort('curriculo_lattes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('curriculo_upload') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pictures') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereco_num') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modo_template') ?></th>
                <th scope="col"><?= $this->Paginator->sort('auto_declaracao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('banca_verificacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deficiencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transporte_publico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('religiao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($perfis as $perfi): ?>
            <tr>
                <td><?= $this->Number->format($perfi->id) ?></td>
                <td><?= h($perfi->nome_social) ?></td>
                <td><?= h($perfi->contatos) ?></td>
                <td><?= h($perfi->facebook) ?></td>
                <td><?= h($perfi->curriculo_lattes) ?></td>
                <td><?= h($perfi->curriculo_upload) ?></td>
                <td><?= h($perfi->pictures) ?></td>
                <td><?= h($perfi->rg) ?></td>
                <td><?= h($perfi->cpf) ?></td>
                <td><?= h($perfi->cep) ?></td>
                <td><?= h($perfi->endereco) ?></td>
                <td><?= h($perfi->endereco_num) ?></td>
                <td><?= h($perfi->bairro) ?></td>
                <td><?= h($perfi->cidade) ?></td>
                <td><?= h($perfi->estado) ?></td>
                <td><?= h($perfi->modo_template) ?></td>
                <td><?= h($perfi->auto_declaracao) ?></td>
                <td><?= h($perfi->banca_verificacao) ?></td>
                <td><?= h($perfi->deficiencia) ?></td>
                <td><?= h($perfi->transporte_publico) ?></td>
                <td><?= h($perfi->religiao) ?></td>
                <td><?= h($perfi->created) ?></td>
                <td><?= h($perfi->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $perfi->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $perfi->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $perfi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perfi->id)]) ?>
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
