<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Curso Entity
 *
 * @property int $id
 * @property string|null $logo
 * @property string $nome
 * @property string $titulo
 * @property string|null $img
 * @property bool|null $visivel
 * @property string|null $descricao
 * @property string|null $descricao_html
 * @property string|null $objetivo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $modificadores_id
 *
 * @property \App\Model\Entity\Modificadore $modificadore
 */
class Curso extends Entity
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
        'logo' => true,
        'nome' => true,
        'titulo' => true,
        'img' => true,
        'visivel' => true,
        'descricao' => true,
        'descricao_html' => true,
        'objetivo' => true,
        'created' => true,
        'modified' => true,
        'modificadore' => true
    ];
}
