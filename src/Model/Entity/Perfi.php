<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Perfi Entity
 *
 * @property int $id
 * @property string $nome
 * @property string|resource $img
 * @property string $rg
 * @property string $cpf
 * @property string $cep
 * @property string $endereco
 * @property string $endereconum
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 */
class Perfi extends Entity
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
        'nome' => true,
        'img' => true,
        'rg' => true,
        'cpf' => true,
        'cep' => true,
        'endereco' => true,
        'endereconum' => true,
        'bairro' => true,
        'cidade' => true,
        'estado' => true
    ];
}
