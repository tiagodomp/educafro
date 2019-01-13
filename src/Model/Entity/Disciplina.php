<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Disciplina Entity
 *
 * @property int $id
 * @property int $cursos_modulos_id
 * @property string|null $nome
 * @property string|null $icon
 * @property string|null $descricao
 * @property int|null $credito_aula
 * @property int|null $credito_trabalho
 * @property int|null $carga_horaria_total
 * @property string|null $setores_enem
 * @property \Cake\I18n\FrozenDate|null $ativar
 * @property string|null $objetivos
 * @property string|null $programa_resumido
 * @property string|null $programa
 * @property string|null $avaliacao
 * @property string|null $metodo
 * @property string|null $criterio
 * @property string|null $recuperacao
 * @property string|null $bibliografia
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $modificadores_id
 *
 * @property \App\Model\Entity\CursosModulo $cursos_modulo
 * @property \App\Model\Entity\Modificadore $modificadore
 */
class Disciplina extends Entity
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
        'icon' => true,
        'descricao' => true,
        'credito_aula' => true,
        'credito_trabalho' => true,
        'carga_horaria_total' => true,
        'setores_enem' => true,
        'ativar' => true,
        'objetivos' => true,
        'programa_resumido' => true,
        'programa' => true,
        'avaliacao' => true,
        'metodo' => true,
        'criterio' => true,
        'recuperacao' => true,
        'bibliografia' => true,
        'created' => true,
        'modified' => true,
        'cursos_modulo' => true,
        'modificadore' => true
    ];
}
