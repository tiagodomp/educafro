<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CursosModulo Entity
 *
 * @property int $id
 * @property int $cursos_id
 * @property int $grupos_id
 * @property string|null $nome
 * @property string|null $abreviacao
 * @property string|null $titulo
 * @property array|null $matriz_curricular
 * @property string|null $tipo
 * @property array|null $requisitos_deste_modulo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Curso $curso
 * @property \App\Model\Entity\Grupo $grupo
 */
class CursosModulo extends Entity
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
        'abreviacao' => true,
        'titulo' => true,
        'matriz_curricular' => true,
        'tipo' => true,
        'requisitos_deste_modulo' => true,
        'created' => true,
        'modified' => true,
        'curso' => true,
        'grupo' => true
    ];
}
