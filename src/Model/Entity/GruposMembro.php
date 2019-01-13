<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GruposMembro Entity
 *
 * @property int $id
 * @property int $grupos_id
 * @property array|null $membros
 * @property array|null $path
 * @property \Cake\I18n\FrozenTime|null $created
 *
 * @property \App\Model\Entity\Grupo $grupo
 */
class GruposMembro extends Entity
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
        'membros' => true,
        'path' => true,
        'created' => true,
        'grupo' => true
    ];
}
