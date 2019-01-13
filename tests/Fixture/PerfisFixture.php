<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PerfisFixture
 *
 */
class PerfisFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nome_social' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'contatos' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{´numeros´:[{tipo_descritivo:whatsApp, ddd, numero, permitir_discentes:true, permitir_publico:false }], ´emails´:[{tipo_descritivo:skype, email, permitir_discentes:true, permitir_publico:false}] }', 'precision' => null],
        'facebook' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'curriculo_lattes' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'curriculo_upload' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '[{titulo, user_historico_acoes_id.uploads.pdfID, user_historico_acoes_id.uploads.docID, user_historico_acoes_id.uploads.linkID, datetime}]', 'precision' => null],
        'pictures' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'rg' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cpf' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cep' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'endereco' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'endereco_num' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'bairro' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cidade' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'estado' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'modo_template' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{´outros´:[outros_id, permissao:false, data_permissao, modificadores_id, temporario:true], ´discente´:[discentes_id, permissao:false, data_permissao, modificadores_id, temporario:true], ´docente´:[docentes_id, permissao:false, data_permissao, modificadores_id, temporario:true], ´voluntario´:[voluntarios_id, permissao:false, data_permissao, modificadores_id, temporario:true], ´super_usuario´:[super_usuarios_id, permissao:false, data_permissao, modificadores_id, temporario:true], ´administrador´:[administradores_id, permissao:false, data_permissao, modificadores_id, temporario:true] }', 'precision' => null],
        'auto_declaracao' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{datetime:{tipo, modificadores_id, maquinaIP}}', 'precision' => null],
        'banca_verificacao' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{datetime:{tipo, modificadores_id, maquinaIP}}', 'precision' => null],
        'deficiencia' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{´deficiente´:true, descricao:{}}', 'precision' => null],
        'transporte_publico' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{´necessario´:true, quantas_passagens, ´requer_bilhete_estudante´:true}', 'precision' => null],
        'religiao' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'id_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_unicode_520_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'nome_social' => 'Lorem ipsum dolor sit amet',
                'contatos' => '',
                'facebook' => 'Lorem ipsum dolor sit amet',
                'curriculo_lattes' => 'Lorem ipsum dolor sit amet',
                'curriculo_upload' => '',
                'pictures' => '',
                'rg' => 'Lorem ipsum dolor sit amet',
                'cpf' => 'Lorem ipsum dolor sit amet',
                'cep' => 'Lorem ipsum dolor sit amet',
                'endereco' => 'Lorem ipsum dolor sit amet',
                'endereco_num' => 'Lorem ipsum dolor sit amet',
                'bairro' => 'Lorem ipsum dolor sit amet',
                'cidade' => 'Lorem ipsum dolor sit amet',
                'estado' => 'Lorem ipsum dolor sit amet',
                'modo_template' => '',
                'auto_declaracao' => '',
                'banca_verificacao' => '',
                'deficiencia' => '',
                'transporte_publico' => '',
                'religiao' => 'Lorem ipsum dolor sit amet',
                'created' => '2019-01-13 02:16:58',
                'modified' => '2019-01-13 02:16:58'
            ],
        ];
        parent::init();
    }
}
