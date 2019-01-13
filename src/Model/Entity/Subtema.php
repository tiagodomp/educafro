<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Subtema Entity
 *
 * @property int $id
 * @property int $temas_id
 * @property int $docentes_id
 * @property string|null $nome
 * @property string|null $descricao
 * @property array|null $carga_horaria
 * @property int|null $modificadores_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Tema $tema
 * @property \App\Model\Entity\Docente $docente
 * @property \App\Model\Entity\Modificadore $modificadore
 */
class Subtema extends Entity
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
        'descricao' => true,
        'carga_horaria' => true,
        'modificadores_id' => true,
        'created' => true,
        'modified' => true,
        'tema' => true,
        'docente' => true,
        'modificadore' => true
    ];
}
