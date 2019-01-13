<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DocentesToken Entity
 *
 * @property int $id
 * @property string|null $token
 * @property array|null $senhas
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $docentes_id
 *
 * @property \App\Model\Entity\Docente $docente
 */
class DocentesToken extends Entity
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
        'token' => true,
        'senhas' => true,
        'created' => true,
        'modified' => true,
        'docente' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'token'
    ];
}
