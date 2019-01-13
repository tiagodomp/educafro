<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CursosSeco Entity
 *
 * @property int $id
 * @property int $cursos_id
 * @property string|null $tipo
 * @property int|null $quantas
 * @property array|null $docentes
 * @property array|null $discentes
 * @property array|null $data_inicio_modulo
 * @property array|null $data_final_modulo
 * @property int $codigo_turma
 * @property int|null $vagas
 * @property string|null $carga_horaria
 * @property \Cake\I18n\FrozenDate|null $prox_secao
 * @property bool|null $visivel
 * @property \Cake\I18n\FrozenDate|null $data_inicio_cadastro
 * @property \Cake\I18n\FrozenDate|null $data_final_cadastro
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Curso $curso
 */
class CursosSeco extends Entity
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
        'tipo' => true,
        'quantas' => true,
        'docentes' => true,
        'discentes' => true,
        'data_inicio_modulo' => true,
        'data_final_modulo' => true,
        'codigo_turma' => true,
        'vagas' => true,
        'carga_horaria' => true,
        'prox_secao' => true,
        'visivel' => true,
        'data_inicio_cadastro' => true,
        'data_final_cadastro' => true,
        'created' => true,
        'modified' => true,
        'curso' => true
    ];
}
