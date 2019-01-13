<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RegrasHierarquia Entity
 *
 * @property int $id
 * @property int $regras_permicao_crud_id
 * @property int $modificadores_id
 * @property int $hierarquia
 * @property string|null $observacao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\RegrasPermicaoCrud $regras_permicao_crud
 * @property \App\Model\Entity\Modificadore $modificadore
 */
class RegrasHierarquia extends Entity
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
        'hierarquia' => true,
        'observacao' => true,
        'created' => true,
        'modified' => true,
        'regras_permicao_crud' => true,
        'modificadore' => true
    ];
}
