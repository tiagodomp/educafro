<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cadastro Entity
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property int $lembrar
 * @property string $password
 * @property string $first_name
 * @property string $last_name
 * @property string $nome
 * @property string $rg
 * @property string $cpf
 * @property string $cep
 * @property int $registrosid
 * @property int $codigoid
 * @property int $perfisid
 * @property int $contatosid
 * @property string $ddd
 * @property string $numero
 * @property int $rolesid
 */
class Cadastro extends Entity
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
        'lembrar' => true,
        'password' => true,
        'first_name' => true,
        'last_name' => true,
        'nome' => true,
        'rg' => true,
        'cpf' => true,
        'cep' => true,
        'registrosid' => true,
        'codigoid' => true,
        'perfisid' => true,
        'contatosid' => true,
        'ddd' => true,
        'numero' => true,
        'rolesid' => true
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
