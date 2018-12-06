<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prova[]|\Cake\Collection\CollectionInterface $provas
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
    <h3><?= __('Provas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Matérias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Alunos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Data da prova') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($provas as $prova): ?>
            <tr>
                <td><?= $prova->has('materia') ? $this->Html->link($prova->materia->nome, ['controller' => 'Materias', 'action' => 'view', $prova->materia->id]) : '' ?></td>
                <td><?= $prova->has('perfi') ? $this->Html->link($prova->perfi->nome, ['controller' => 'Perfis', 'action' => 'view', $prova->perfi->id]) : '' ?></td>
                <td><?= $this->Number->format($prova->nota) ?></td>
                <td><?= h($prova->aplicada) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $prova->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $prova->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $prova->id], ['confirm' => __('Você realmente quer deletar a prova de {0} do usuário {1} ?', $prova->materia->nome, $prova->perfi->nome)]) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, exibindo {{current}} registro de um total de {{count}}')]) ?></p>
    </div>
</div>
