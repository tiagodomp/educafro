<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserHistoricoAco Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $log_id
 * @property array|null $acoes
 * @property array|null $acessos
 * @property array|null $uploads
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Log $log
 */
class UserHistoricoAco extends Entity
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
        'acoes' => true,
        'acessos' => true,
        'uploads' => true,
        'user' => true,
        'log' => true
    ];
}
