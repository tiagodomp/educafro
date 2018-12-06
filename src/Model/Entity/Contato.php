<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contato Entity
 *
 * @property int $id
 * @property string $ddd
 * @property string $numero
 * @property string $falarcom
 * @property string $aparelho
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $type
 * @property int $perfis_id
 *
 * @property \App\Model\Entity\Perfi $perfi
 */
class Contato extends Entity
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
        'ddd' => true,
        'numero' => true,
        'falarcom' => true,
        'aparelho' => true,
        'created' => true,
        'modified' => true,
        'type' => true,
        'perfis_id' => true,
        'perfi' => true
    ];
}
