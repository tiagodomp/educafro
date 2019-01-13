<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Log $log
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Log'), ['action' => 'edit', $log->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Log'), ['action' => 'delete', $log->id], ['confirm' => __('Are you sure you want to delete # {0}?', $log->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Log'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Log'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cursos Modulos'), ['controller' => 'CursosModulos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cursos Modulo'), ['controller' => 'CursosModulos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cursos Historico'), ['controller' => 'CursosHistorico', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cursos Historico'), ['controller' => 'CursosHistorico', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos Historico'), ['controller' => 'GruposHistorico', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupos Historico'), ['controller' => 'GruposHistorico', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Historico Acoes'), ['controller' => 'UserHistoricoAcoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Historico Aco'), ['controller' => 'UserHistoricoAcoes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="log view large-9 medium-8 columns content">
    <h3><?= h($log->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Avisos') ?></th>
            <td><?= h($log->avisos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mysql Log Id') ?></th>
            <td><?= h($log->mysql_log_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ip') ?></th>
            <td><?= h($log->ip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Curso') ?></th>
            <td><?= $log->has('curso') ? $this->Html->link($log->curso->id, ['controller' => 'Cursos', 'action' => 'view', $log->curso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cursos Modulo') ?></th>
            <td><?= $log->has('cursos_modulo') ? $this->Html->link($log->cursos_modulo->id, ['controller' => 'CursosModulos', 'action' => 'view', $log->cursos_modulo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Evento') ?></th>
            <td><?= $log->has('evento') ? $this->Html->link($log->evento->id, ['controller' => 'Eventos', 'action' => 'view', $log->evento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($log->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info') ?></th>
            <td><?= h($log->info) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($log->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($log->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($log->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($log->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cursos Historico') ?></h4>
        <?php if (!empty($log->cursos_historico)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Cursos Secoes Id') ?></th>
                <th scope="col"><?= __('Log Id') ?></th>
                <th scope="col"><?= __('Ultima Data Iniciada') ?></th>
                <th scope="col"><?= __('Ultima Data Finalizada') ?></th>
                <th scope="col"><?= __('Ultimo Status') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Historico Aproveitamento') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($log->cursos_historico as $cursosHistorico): ?>
            <tr>
                <td><?= h($cursosHistorico->id) ?></td>
                <td><?= h($cursosHistorico->cursos_secoes_id) ?></td>
                <td><?= h($cursosHistorico->log_id) ?></td>
                <td><?= h($cursosHistorico->ultima_data_iniciada) ?></td>
                <td><?= h($cursosHistorico->ultima_data_finalizada) ?></td>
                <td><?= h($cursosHistorico->ultimo_status) ?></td>
                <td><?= h($cursosHistorico->historico) ?></td>
                <td><?= h($cursosHistorico->historico_aproveitamento) ?></td>
                <td><?= h($cursosHistorico->created) ?></td>
                <td><?= h($cursosHistorico->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CursosHistorico', 'action' => 'view', $cursosHistorico->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CursosHistorico', 'action' => 'edit', $cursosHistorico->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CursosHistorico', 'action' => 'delete', $cursosHistorico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cursosHistorico->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Grupos Historico') ?></h4>
        <?php if (!empty($log->grupos_historico)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Log Id') ?></th>
                <th scope="col"><?= __('Grupos Id') ?></th>
                <th scope="col"><?= __('Ultima Data Iniciada') ?></th>
                <th scope="col"><?= __('Ultima Data Finalizada') ?></th>
                <th scope="col"><?= __('Ultimo Status') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($log->grupos_historico as $gruposHistorico): ?>
            <tr>
                <td><?= h($gruposHistorico->id) ?></td>
                <td><?= h($gruposHistorico->log_id) ?></td>
                <td><?= h($gruposHistorico->grupos_id) ?></td>
                <td><?= h($gruposHistorico->ultima_data_iniciada) ?></td>
                <td><?= h($gruposHistorico->ultima_data_finalizada) ?></td>
                <td><?= h($gruposHistorico->ultimo_status) ?></td>
                <td><?= h($gruposHistorico->historico) ?></td>
                <td><?= h($gruposHistorico->created) ?></td>
                <td><?= h($gruposHistorico->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'GruposHistorico', 'action' => 'view', $gruposHistorico->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'GruposHistorico', 'action' => 'edit', $gruposHistorico->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'GruposHistorico', 'action' => 'delete', $gruposHistorico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gruposHistorico->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Historico Acoes') ?></h4>
        <?php if (!empty($log->user_historico_acoes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Log Id') ?></th>
                <th scope="col"><?= __('Acoes') ?></th>
                <th scope="col"><?= __('Acessos') ?></th>
                <th scope="col"><?= __('Uploads') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($log->user_historico_acoes as $userHistoricoAcoes): ?>
            <tr>
                <td><?= h($userHistoricoAcoes->id) ?></td>
                <td><?= h($userHistoricoAcoes->user_id) ?></td>
                <td><?= h($userHistoricoAcoes->log_id) ?></td>
                <td><?= h($userHistoricoAcoes->acoes) ?></td>
                <td><?= h($userHistoricoAcoes->acessos) ?></td>
                <td><?= h($userHistoricoAcoes->uploads) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserHistoricoAcoes', 'action' => 'view', $userHistoricoAcoes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserHistoricoAcoes', 'action' => 'edit', $userHistoricoAcoes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserHistoricoAcoes', 'action' => 'delete', $userHistoricoAcoes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userHistoricoAcoes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
