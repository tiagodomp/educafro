<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Notificaco Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $nao_visualizadas
 * @property array|null $instancias
 * @property int|null $tempo_medio_resposta
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Notificaco extends Entity
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
        'nao_visualizadas' => true,
        'instancias' => true,
        'tempo_medio_resposta' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];
}
