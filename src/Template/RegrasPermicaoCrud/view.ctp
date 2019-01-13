<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegrasPermicaoCrud $regrasPermicaoCrud
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Regras Permicao Crud'), ['action' => 'edit', $regrasPermicaoCrud->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Regras Permicao Crud'), ['action' => 'delete', $regrasPermicaoCrud->id], ['confirm' => __('Are you sure you want to delete # {0}?', $regrasPermicaoCrud->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Regras Permicao Crud'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Regras Permicao Crud'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regras Hierarquias'), ['controller' => 'RegrasHierarquias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Regras Hierarquia'), ['controller' => 'RegrasHierarquias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="regrasPermicaoCrud view large-9 medium-8 columns content">
    <h3><?= h($regrasPermicaoCrud->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Criar') ?></th>
            <td><?= h($regrasPermicaoCrud->criar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visualizar') ?></th>
            <td><?= h($regrasPermicaoCrud->visualizar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Editar') ?></th>
            <td><?= h($regrasPermicaoCrud->editar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deletar') ?></th>
            <td><?= h($regrasPermicaoCrud->deletar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($regrasPermicaoCrud->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($regrasPermicaoCrud->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($regrasPermicaoCrud->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Regras Hierarquias') ?></h4>
        <?php if (!empty($regrasPermicaoCrud->regras_hierarquias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Regras Permicao Crud Id') ?></th>
                <th scope="col"><?= __('Modificadores Id') ?></th>
                <th scope="col"><?= __('Hierarquia') ?></th>
                <th scope="col"><?= __('Observacao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($regrasPermicaoCrud->regras_hierarquias as $regrasHierarquias): ?>
            <tr>
                <td><?= h($regrasHierarquias->id) ?></td>
                <td><?= h($regrasHierarquias->regras_permicao_crud_id) ?></td>
                <td><?= h($regrasHierarquias->modificadores_id) ?></td>
                <td><?= h($regrasHierarquias->hierarquia) ?></td>
                <td><?= h($regrasHierarquias->observacao) ?></td>
                <td><?= h($regrasHierarquias->created) ?></td>
                <td><?= h($regrasHierarquias->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'RegrasHierarquias', 'action' => 'view', $regrasHierarquias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'RegrasHierarquias', 'action' => 'edit', $regrasHierarquias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'RegrasHierarquias', 'action' => 'delete', $regrasHierarquias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $regrasHierarquias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
