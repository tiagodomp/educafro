<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher; // Add esta linha
/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $google
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $oauth_provider
 * @property string $oauth_uid
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property string $locale
 * @property string $cover
 * @property string $picture
 * @property string $link
 * @property int $type
 * @property int $perfis_id
 * @property int $codigos_id
 * @property int $roles_id
 *
 * @property \App\Model\Entity\Perfi $perfi
 * @property \App\Model\Entity\Codigo $codigo
 * @property \App\Model\Entity\Role $role
 */
class User extends Entity
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
        'id' => false,
        'username' => true,
        'email' => true,
        'password' => true,
        'remember_token' => true,
        'google' => true,
        'created' => true,
        'modified' => true,
        'oauth_provider' => true,
        'oauth_uid' => true,
        'first_name' => true,
        'last_name' => true,
        'gender' => true,
        'locale' => true,
        'cover' => true,
        'picture' => true,
        'link' => true,
        'type' => true,
        'perfis_id' => true,
        'codigos_id' => true,
        'roles_id' => true,
        'perfi' => true,
        'codigo' => true,
        'role' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    
    //
    protected function _setPassword($password)
    {
        if(strlen($password) > 0){
            return (new DefaultPasswordHasher)->hash($password);
        }
    } 
    /*
    protected $_hidden = [
        'password'
    ]; */
    
    protected function _getFullName()
    {
        return $this->_properties['first_name'] . '  ' .
            $this->_properties['last_name'];
    }
}
