<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserCadastro Entity
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string|null $first_name
 * @property string|null $middle_name
 * @property string|null $last_name
 * @property string|null $rg
 * @property string|null $cpf
 * @property string|null $cep
 * @property string|null $numero_principal
 * @property string|null $numero_contato
 * @property array|null $info
 * @property int|null $modificadores_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Modificadore $modificadore
 * @property \App\Model\Entity\User[] $user
 */
class UserCadastro extends Entity
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
        'username' => true,
        'email' => true,
        'password' => true,
        'first_name' => true,
        'middle_name' => true,
        'last_name' => true,
        'rg' => true,
        'cpf' => true,
        'cep' => true,
        'numero_principal' => true,
        'numero_contato' => true,
        'info' => true,
        'modificadores_id' => true,
        'created' => true,
        'modified' => true,
        'modificadore' => true,
        'user' => true
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
