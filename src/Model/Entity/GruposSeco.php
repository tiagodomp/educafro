<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GruposSeco Entity
 *
 * @property int $id
 * @property int $grupos_id
 * @property string|null $titulo
 * @property array|null $inscritos
 * @property array|null $pendentes
 * @property array|null $matriculados
 * @property array|null $rejeitados
 * @property string|null $descricao
 * @property string|null $codigo_do_grupo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Grupo $grupo
 */
class GruposSeco extends Entity
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
        'titulo' => true,
        'inscritos' => true,
        'pendentes' => true,
        'matriculados' => true,
        'rejeitados' => true,
        'descricao' => true,
        'codigo_do_grupo' => true,
        'created' => true,
        'modified' => true,
        'grupo' => true
    ];
}
