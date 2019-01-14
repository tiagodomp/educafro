<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int $user_cadastro_id
 * @property int $perfis_id
 * @property string|null $username
 * @property string|null $email
 * @property string|null $password
 * @property string|null $remember_token
 * @property string|null $google
 * @property string|null $oauth_provider
 * @property string|null $primeiro_nome
 * @property string|null $meio_nome
 * @property string|null $ultimo_nome
 * @property string|null $gender
 * @property string|null $locale
 * @property string|null $cover
 * @property string|null $photo
 * @property string|null $photo_dir
 * @property int|null $photo_size
 * @property string|null $photo_type
 * @property string|null $link
 * @property array|null $info
 * @property string|null $sexo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\UserCadastro $user_cadastro
 * @property \App\Model\Entity\Perfi $perfi
 */
class User extends Entity
{

    use JsonTrait;

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
        'username' => true,
        'email' => true,
        'password' => true,
        'remember_token' => true,
        'google' => true,
        'oauth_provider' => true,
        'primeiro_nome' => true,
        'meio_nome' => true,
        'ultimo_nome' => true,
        'gender' => true,
        'locale' => true,
        'cover' => true,
        'photo' => true,
        'photo_dir' => true,
        'photo_size' => true,
        'photo_type' => true,
        'link' => true,
        'info' => true,
        'sexo' => true,
        'created' => true,
        'modified' => true,
        'user_cadastro' => true,
        'perfi' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
