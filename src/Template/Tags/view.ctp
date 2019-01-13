<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modificadores'), ['controller' => 'Modificadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modificadore'), ['controller' => 'Modificadores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags Tags'), ['controller' => 'TagsTags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tags Tag'), ['controller' => 'TagsTags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tags view large-9 medium-8 columns content">
    <h3><?= h($tag->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Modificadore') ?></th>
            <td><?= $tag->has('modificadore') ? $this->Html->link($tag->modificadore->id, ['controller' => 'Modificadores', 'action' => 'view', $tag->modificadore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tags Tag') ?></th>
            <td><?= $tag->has('tags_tag') ? $this->Html->link($tag->tags_tag->id, ['controller' => 'TagsTags', 'action' => 'view', $tag->tags_tag->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lista') ?></th>
            <td><?= h($tag->lista) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tag->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tags Tagged Id') ?></th>
            <td><?= $this->Number->format($tag->tags_tagged_id) ?></td>
        </tr>
    </table>
</div>
