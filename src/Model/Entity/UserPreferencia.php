<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserPreferencia Entity
 *
 * @property int $id
 * @property int $user_id
 * @property array|null $configuracoes
 * @property array|null $temas
 * @property array|null $plugins
 * @property array|null $temporarios
 *
 * @property \App\Model\Entity\User $user
 */
class UserPreferencia extends Entity
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
        'configuracoes' => true,
        'temas' => true,
        'plugins' => true,
        'temporarios' => true,
        'user' => true
    ];
}
