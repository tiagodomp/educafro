<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Prova Entity
 *
 * @property int $id
 * @property int $disciplinas_id
 * @property string|null $tipo
 * @property string|null $provas_anima_id
 * @property array|null $provas
 * @property array|null $gabarito
 * @property array|null $notas
 * @property array|null $info_anima
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $modificadores_id
 *
 * @property \App\Model\Entity\Disciplina $disciplina
 * @property \App\Model\Entity\ProvasAnima $provas_anima
 * @property \App\Model\Entity\Modificadore $modificadore
 */
class Prova extends Entity
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
        'provas_anima_id' => true,
        'provas' => true,
        'gabarito' => true,
        'notas' => true,
        'info_anima' => true,
        'created' => true,
        'modified' => true,
        'disciplina' => true,
        'provas_anima' => true,
        'modificadore' => true
    ];
}
