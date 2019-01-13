<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Grupo Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property array|null $adm_grupo
 * @property array|null $picture
 * @property bool|null $ativo
 * @property string|null $descricao
 * @property string|null $objetivo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Grupo extends Entity
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
        'adm_grupo' => true,
        'picture' => true,
        'ativo' => true,
        'descricao' => true,
        'objetivo' => true,
        'created' => true,
        'modified' => true
    ];
}
