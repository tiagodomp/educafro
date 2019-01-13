<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserInscrico Entity
 *
 * @property int $id
 * @property int $user_id
 * @property bool|null $autorizado
 * @property array|null $inscricoes
 *
 * @property \App\Model\Entity\User $user
 */
class UserInscrico extends Entity
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
        'autorizado' => true,
        'inscricoes' => true,
        'user' => true
    ];
}
