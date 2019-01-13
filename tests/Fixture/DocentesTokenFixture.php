<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DocentesTokenFixture
 *
 */
class DocentesTokenFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'docentes_token';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'token' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'senhas' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '[{senha_criptografada:[ senha_tokenID, regras_id, status:[desativado:false, ativado:true, invalido:false, suspeito:false], data_criada, data_modificada ]}]  senha_tokenID => data_criada .´_´. data_modifcada', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'docentes_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_docentes_token_docentes1_idx' => ['type' => 'index', 'columns' => ['docentes_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'docentes_id'], 'length' => []],
            'id_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_docentes_token_docentes1' => ['type' => 'foreign', 'columns' => ['docentes_id'], 'references' => ['docentes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'token' => 'Lorem ipsum dolor sit amet',
                'senhas' => '',
                'created' => '2019-01-13 02:26:35',
                'modified' => '2019-01-13 02:26:35',
                'docentes_id' => 1
            ],
        ];
        parent::init();
    }
}
