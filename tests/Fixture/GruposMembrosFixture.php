<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GruposMembrosFixture
 *
 */
class GruposMembrosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'grupos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'membros' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{interacao:true,´usuarios´:[user_id:{data_expiração, data_adicionado, data-modificado, modificadores_id, upload:true, status:true}], quantidade_usuarios }', 'precision' => null],
        'path' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Arquico JSON especificando as ramificações assim como os donos dos arquivos baseado no path cedido por GRUPOS_MEMBROS, que este grupo fez upload. { ´arquivos´:[{upload:true, ´path´:[{ userid:{status:[bloqueado:false], pasta_primaria, ´arq´:[{nome, titulo, tipo_MIME, miniatura, path}] ]} ] }]', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_grupos_membros_grupos1_idx' => ['type' => 'index', 'columns' => ['grupos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'grupos_id'], 'length' => []],
            'id_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_grupos_membros_grupos1' => ['type' => 'foreign', 'columns' => ['grupos_id'], 'references' => ['grupos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'grupos_id' => 1,
                'membros' => '',
                'path' => '',
                'created' => '2019-01-13 02:27:52'
            ],
        ];
        parent::init();
    }
}
