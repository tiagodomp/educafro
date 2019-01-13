<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CodigosInfo Entity
 *
 * @property int $id
 * @property int $codigos_id
 * @property int $modificadores_id
 * @property string|null $nome
 * @property string|null $titulo
 * @property string|null $descricao
 * @property array|null $img
 * @property array|null $beneficios
 * @property array|null $publico_alvo
 * @property array|null $como_obter
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Codigo $codigo
 * @property \App\Model\Entity\Modificadore $modificadore
 */
class CodigosInfo extends Entity
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
        'nome' => true,
        'titulo' => true,
        'descricao' => true,
        'img' => true,
        'beneficios' => true,
        'publico_alvo' => true,
        'como_obter' => true,
        'created' => true,
        'modified' => true,
        'codigo' => true,
        'modificadore' => true
    ];
}
