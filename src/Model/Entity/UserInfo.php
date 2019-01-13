<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserInfo Entity
 *
 * @property int $id
 * @property int $user_id
 * @property array|null $info_pessoal
 * @property array|null $info_sistema
 *
 * @property \App\Model\Entity\User $user
 */
class UserInfo extends Entity
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
        'info_pessoal' => true,
        'info_sistema' => true,
        'user' => true
    ];
}
