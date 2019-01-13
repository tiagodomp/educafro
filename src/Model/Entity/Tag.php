<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tag Entity
 *
 * @property int $id
 * @property int $modificadores_id
 * @property int $tags_tags_id
 * @property int $tags_tagged_id
 * @property array|null $lista
 *
 * @property \App\Model\Entity\Modificadore $modificadore
 * @property \App\Model\Entity\TagsTag $tags_tag
 * @property \App\Model\Entity\TagsTagged $tags_tagged
 */
class Tag extends Entity
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
        'lista' => true,
        'modificadore' => true,
        'tags_tag' => true,
        'tags_tagged' => true
    ];
}
