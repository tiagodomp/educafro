<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RegrasHistoricoAtribuico Entity
 *
 * @property int $id
 * @property int $user_atribuicoes_id
 * @property array|null $info
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\UserAtribuico $user_atribuico
 */
class RegrasHistoricoAtribuico extends Entity
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
        'info' => true,
        'created' => true,
        'modified' => true,
        'user_atribuico' => true
    ];
}
