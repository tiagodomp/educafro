<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Prova Entity
 *
 * @property int $id
 * @property int $perfis_id
 * @property int $materias_id
 * @property \Cake\I18n\FrozenTime $aplicada
 * @property float $nota
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Perfi $perfi
 * @property \App\Model\Entity\Materia $materia
 */
class Prova extends Entity
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
        'perfis_id' => true,
        'materias_id' => true,
        'aplicada' => true,
        'nota' => true,
        'created' => true,
        'modified' => true,
        'perfi' => true,
        'materia' => true
    ];
}
