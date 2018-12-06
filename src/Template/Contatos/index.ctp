<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contato[]|\Cake\Collection\CollectionInterface $contatos
 */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações Gerais') ?></li>
        <li><?= $this->Html->link(__('Novo Usuário'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Visualizar Usuários'), ['controller' => 'Users','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Atribuir Perfil'), ['controller' => 'Perfis', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Visualizar Perfis'), ['controller' => 'Perfis', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Atribuir Contato'), ['controller' => 'Contatos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Visualizar Códigos ITA.AFRO'), ['controller' => 'Codigos', 'action' => 'codeIta']) ?></li>
        <li><?= $this->Html->link(__('Visualizar Códigos MED.AFRO'), ['controller' => 'Codigos', 'action' => 'codeMed']) ?></li>
    </ul>
</nav>
<div class="users index large-10 medium-9 columns content">
    <h3><?= __('Contatos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Usuário') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DDD ') ?><?= $this->Paginator->sort('  Tell/Cell') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Falar com') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Dispositivo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contatos as $contato): ?>
            <tr>
                <td><?= $contato->has('perfi') ? $this->Html->link($contato->perfi->nome, ['controller' => 'Perfis', 'action' => 'view', $contato->perfi->id]) : '' ?></td>
                <td>(<?= h($contato->ddd) ?>) <?= h($contato->numero) ?></td>
                <td><?= h($contato->falarcom) ?></td>
                <td><?= h($contato->aparelho) ?></td>
                <td><?= $this->Number->format($contato->type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $contato->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $contato->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $contato->id], ['confirm' => __('Você realmente quer deletar o número ({0}) {1} do {2}?',$contato->ddd,$contato->numero, $contato->perfi->nome)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
