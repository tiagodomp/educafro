<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Perfi $perfi
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $perfi->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $perfi->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Perfis'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="perfis form large-9 medium-8 columns content">
    <?= $this->Form->create($perfi) ?>
    <fieldset>
        <legend><?= __('Edit Perfi') ?></legend>
        <?php
            echo $this->Form->control('nome_social');
            echo $this->Form->control('contatos');
            echo $this->Form->control('facebook');
            echo $this->Form->control('curriculo_lattes');
            echo $this->Form->control('curriculo_upload');
            echo $this->Form->control('pictures');
            echo $this->Form->control('rg');
            echo $this->Form->control('cpf');
            echo $this->Form->control('cep');
            echo $this->Form->control('endereco');
            echo $this->Form->control('endereco_num');
            echo $this->Form->control('bairro');
            echo $this->Form->control('cidade');
            echo $this->Form->control('estado');
            echo $this->Form->control('modo_template');
            echo $this->Form->control('auto_declaracao');
            echo $this->Form->control('banca_verificacao');
            echo $this->Form->control('deficiencia');
            echo $this->Form->control('transporte_publico');
            echo $this->Form->control('religiao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
