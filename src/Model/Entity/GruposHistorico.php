<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GruposHistorico Entity
 *
 * @property int $id
 * @property int $log_id
 * @property int $grupos_id
 * @property \Cake\I18n\FrozenDate|null $ultima_data_iniciada
 * @property \Cake\I18n\FrozenDate|null $ultima_data_finalizada
 * @property string|null $ultimo_status
 * @property array|null $historico
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Log $log
 * @property \App\Model\Entity\Grupo $grupo
 */
class GruposHistorico extends Entity
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
        'ultima_data_iniciada' => true,
        'ultima_data_finalizada' => true,
        'ultimo_status' => true,
        'historico' => true,
        'created' => true,
        'modified' => true,
        'log' => true,
        'grupo' => true
    ];
}
