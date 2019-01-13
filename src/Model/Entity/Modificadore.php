<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Modificadore Entity
 *
 * @property int $id
 * @property int $user_historico_acoes_id
 * @property array|null $rastreador_rotas
 *
 * @property \App\Model\Entity\UserHistoricoAco $user_historico_aco
 */
class Modificadore extends Entity
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
        'rastreador_rotas' => true,
        'user_historico_aco' => true
    ];
}
