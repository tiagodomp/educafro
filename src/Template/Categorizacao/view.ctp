<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categorizacao $categorizacao
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categorizacao'), ['action' => 'edit', $categorizacao->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categorizacao'), ['action' => 'delete', $categorizacao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorizacao->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categorizacao'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorizacao'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorizacao Info'), ['controller' => 'CategorizacaoInfo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorizacao Info'), ['controller' => 'CategorizacaoInfo', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categorizacao view large-9 medium-8 columns content">
    <h3><?= h($categorizacao->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categorizacao->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Categorizacao Info') ?></h4>
        <?php if (!empty($categorizacao->categorizacao_info)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Categorizacao Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($categorizacao->categorizacao_info as $categorizacaoInfo): ?>
            <tr>
                <td><?= h($categorizacaoInfo->id) ?></td>
                <td><?= h($categorizacaoInfo->categorizacao_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CategorizacaoInfo', 'action' => 'view', $categorizacaoInfo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CategorizacaoInfo', 'action' => 'edit', $categorizacaoInfo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CategorizacaoInfo', 'action' => 'delete', $categorizacaoInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorizacaoInfo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Eventos') ?></h4>
        <?php if (!empty($categorizacao->eventos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Modificadores Id') ?></th>
                <th scope="col"><?= __('Categorizacao Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($categorizacao->eventos as $eventos): ?>
            <tr>
                <td><?= h($eventos->id) ?></td>
                <td><?= h($eventos->modificadores_id) ?></td>
                <td><?= h($eventos->categorizacao_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Eventos', 'action' => 'view', $eventos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Eventos', 'action' => 'edit', $eventos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Eventos', 'action' => 'delete', $eventos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
