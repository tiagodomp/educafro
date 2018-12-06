<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Codigo[]|\Cake\Collection\CollectionInterface $codigos
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
        <li><?= $this->Html->link(__('Visualizar Códigos ITA.AFRO'), ['controller' => 'Codigos', 'action' => 'ita']) ?></li>
        <li><?= $this->Html->link(__('Visualizar Códigos MED.AFRO'), ['controller' => 'Codigos', 'action' => 'med']) ?></li>
    </ul>
</nav>
<div class="users index large-10 medium-9 columns content">
    <h3><?= __('Codigos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Identificação') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Código') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Estado do código') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Data de ativação') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($codigos as $codigo): ?>
            <tr>
                <td><?= $this->Number->format($codigo->id) ?></td>
                <td><?= h($codigo->code) ?></td>
                <td><?php if($this->Number->format($codigo->ativacao)>0){echo '<b style="color: red;">Indisponível</b>';} else {echo '<b style="color: green;">Disponível</b>';} ?></td>
                <td><?= h($codigo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $codigo->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $codigo->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $codigo->id], ['confirm' => __('Você realmente quer deletar o código {0}?', $codigo->code)]) ?>
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
