<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PerfisInfo Entity
 *
 * @property int $id
 * @property int $perfis_id
 * @property int $perfis_user_id
 *
 * @property \App\Model\Entity\Perfi $perfi
 * @property \App\Model\Entity\PerfisUser $perfis_user
 */
class PerfisInfo extends Entity
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
        'perfi' => true,
        'perfis_user' => true
    ];
}
