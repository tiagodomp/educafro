<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Regra Entity
 *
 * @property int $id
 * @property int $grupos_id
 * @property int $regras_hierarquias_id
 * @property string $cargo
 * @property string|null $status
 * @property string|null $descricao
 * @property array|null $info
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $modificadores_id
 *
 * @property \App\Model\Entity\Grupo $grupo
 * @property \App\Model\Entity\RegrasHierarquia $regras_hierarquia
 * @property \App\Model\Entity\Modificadore $modificadore
 */
class Regra extends Entity
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
        'cargo' => true,
        'status' => true,
        'descricao' => true,
        'info' => true,
        'created' => true,
        'modified' => true,
        'grupo' => true,
        'regras_hierarquia' => true,
        'modificadore' => true
    ];
}
