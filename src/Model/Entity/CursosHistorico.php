<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CursosHistorico Entity
 *
 * @property int $id
 * @property int $cursos_secoes_id
 * @property int $log_id
 * @property \Cake\I18n\FrozenDate|null $ultima_data_iniciada
 * @property \Cake\I18n\FrozenDate|null $ultima_data_finalizada
 * @property string|null $ultimo_status
 * @property array|null $historico
 * @property array|null $historico_aproveitamento
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\CursosSeco $cursos_seco
 * @property \App\Model\Entity\Log $log
 */
class CursosHistorico extends Entity
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
        'historico_aproveitamento' => true,
        'created' => true,
        'modified' => true,
        'cursos_seco' => true,
        'log' => true
    ];
}
