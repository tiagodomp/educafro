<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RegrasPermicaoCrud Entity
 *
 * @property int $id
 * @property array|null $criar
 * @property array|null $visualizar
 * @property array|null $editar
 * @property array|null $deletar
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\RegrasHierarquia[] $regras_hierarquias
 */
class RegrasPermicaoCrud extends Entity
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
        'criar' => true,
        'visualizar' => true,
        'editar' => true,
        'deletar' => true,
        'created' => true,
        'modified' => true,
        'regras_hierarquias' => true
    ];
}
