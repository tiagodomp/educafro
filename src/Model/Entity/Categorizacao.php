<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Categorizacao Entity
 *
 * @property int $id
 *
 * @property \App\Model\Entity\CategorizacaoInfo[] $categorizacao_info
 * @property \App\Model\Entity\Evento[] $eventos
 */
class Categorizacao extends Entity
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
        'categorizacao_info' => true,
        'eventos' => true
    ];
}
