<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GruposDeVoluntario Entity
 *
 * @property int $grupos_id
 * @property int $voluntarios_id
 *
 * @property \App\Model\Entity\Grupo $grupo
 * @property \App\Model\Entity\Voluntario $voluntario
 */
class GruposDeVoluntario extends Entity
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
        'grupo' => true,
        'voluntario' => true
    ];
}
