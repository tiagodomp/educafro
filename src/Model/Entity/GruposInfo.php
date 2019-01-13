<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GruposInfo Entity
 *
 * @property int $id
 * @property int $grupos_id
 * @property string|null $tipo
 * @property bool|null $visivel
 * @property string|null $info
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $modificadores_id
 *
 * @property \App\Model\Entity\Grupo $grupo
 * @property \App\Model\Entity\Modificadore $modificadore
 */
class GruposInfo extends Entity
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
        'tipo' => true,
        'visivel' => true,
        'info' => true,
        'created' => true,
        'modified' => true,
        'modificadores_id' => true,
        'grupo' => true,
        'modificadore' => true
    ];
}
