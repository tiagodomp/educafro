<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aula Entity
 *
 * @property int $id
 * @property int $subtemas_id
 * @property string|null $nome
 * @property string|null $titulo
 * @property \Cake\I18n\FrozenTime|null $inicio_aula
 * @property \Cake\I18n\FrozenTime|null $final_aula
 * @property bool|null $docente_presente
 * @property array|null $discentes_presente
 * @property string|null $descricao
 * @property array|null $videoaula
 * @property array|null $material_apoio
 * @property array|null $bibliografia
 * @property \Cake\I18n\FrozenTime|null $entregar_trabalho
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Subtema $subtema
 */
class Aula extends Entity
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
        'inicio_aula' => true,
        'final_aula' => true,
        'docente_presente' => true,
        'discentes_presente' => true,
        'descricao' => true,
        'videoaula' => true,
        'material_apoio' => true,
        'bibliografia' => true,
        'entregar_trabalho' => true,
        'created' => true,
        'modified' => true,
        'subtema' => true
    ];
}
