<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GruposDeAdministradore Entity
 *
 * @property int $grupos_id
 * @property int $administradores_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Grupo $grupo
 * @property \App\Model\Entity\Administradore $administradore
 */
class GruposDeAdministradore extends Entity
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
        'created' => true,
        'modified' => true,
        'grupo' => true,
        'administradore' => true
    ];
}
