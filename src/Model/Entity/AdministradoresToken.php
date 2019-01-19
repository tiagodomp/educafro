<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AdministradoresToken Entity
 *
 * @property int $id
 * @property int $administradores_id
 * @property string|null $token
 * @property string|null $instancia
 * @property string|null $ip_restricao
 * @property string|null $info
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Administradore $administradore
 */
class AdministradoresToken extends Entity
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
        'instancia' => true,
        'ip_restricao' => true,
        'info' => true,
        'created' => true,
        'modified' => true,
        'administradore' => true
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