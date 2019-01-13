<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Perfi Entity
 *
 * @property int $id
 * @property string|null $nome_social
 * @property array|null $contatos
 * @property string|null $facebook
 * @property string|null $curriculo_lattes
 * @property array|null $curriculo_upload
 * @property array|null $pictures
 * @property string|null $rg
 * @property string|null $cpf
 * @property string|null $cep
 * @property string|null $endereco
 * @property string|null $endereco_num
 * @property string|null $bairro
 * @property string|null $cidade
 * @property string|null $estado
 * @property array|null $modo_template
 * @property array|null $auto_declaracao
 * @property array|null $banca_verificacao
 * @property array|null $deficiencia
 * @property array|null $transporte_publico
 * @property string|null $religiao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
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
        'nome_social' => true,
        'contatos' => true,
        'facebook' => true,
        'curriculo_lattes' => true,
        'curriculo_upload' => true,
        'pictures' => true,
        'rg' => true,
        'cpf' => true,
        'cep' => true,
        'endereco' => true,
        'endereco_num' => true,
        'bairro' => true,
        'cidade' => true,
        'estado' => true,
        'modo_template' => true,
        'auto_declaracao' => true,
        'banca_verificacao' => true,
        'deficiencia' => true,
        'transporte_publico' => true,
        'religiao' => true,
        'created' => true,
        'modified' => true
    ];
}
