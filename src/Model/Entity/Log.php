<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Log Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property array|null $avisos
 * @property array|null $mysql_log_id
 * @property string|null $ip
 * @property int|null $cursos_id
 * @property int|null $cursos_modulo_id
 * @property int|null $eventos_id
 * @property string|null $url
 * @property array|null $info
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\MysqlLog $mysql_log
 * @property \App\Model\Entity\Curso $curso
 * @property \App\Model\Entity\CursosModulo $cursos_modulo
 * @property \App\Model\Entity\Evento $evento
 * @property \App\Model\Entity\CursosHistorico[] $cursos_historico
 * @property \App\Model\Entity\GruposHistorico[] $grupos_historico
 * @property \App\Model\Entity\UserHistoricoAco[] $user_historico_acoes
 */
class Log extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'avisos' => true,
        'mysql_log_id' => true,
        'ip' => true,
        'cursos_id' => true,
        'cursos_modulo_id' => true,
        'eventos_id' => true,
        'url' => true,
        'info' => true,
        'user' => true,
        'mysql_log' => true,
        'curso' => true,
        'cursos_modulo' => true,
        'evento' => true,
        'cursos_historico' => true,
        'grupos_historico' => true,
        'user_historico_acoes' => true
    ];
}
