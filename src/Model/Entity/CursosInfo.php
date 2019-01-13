<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CursosInfo Entity
 *
 * @property int $id
 * @property int $cursos_id
 * @property array|null $documentacao_requisitada
 * @property string|null $nivel
 * @property string|null $tipo
 * @property bool|null $visivel
 * @property string|null $info
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Curso $curso
 */
class CursosInfo extends Entity
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
        'documentacao_requisitada' => true,
        'nivel' => true,
        'tipo' => true,
        'visivel' => true,
        'info' => true,
        'created' => true,
        'modified' => true,
        'curso' => true
    ];
}
