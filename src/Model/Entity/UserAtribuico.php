<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserAtribuico Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $acao
 * @property string|null $titulo
 * @property int|null $eventos_id
 * @property array|null $info
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Evento $evento
 */
class UserAtribuico extends Entity
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
        'acao' => true,
        'titulo' => true,
        'eventos_id' => true,
        'info' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'evento' => true
    ];
}
