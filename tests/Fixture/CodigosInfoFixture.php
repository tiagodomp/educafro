<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CodigosInfoFixture
 *
 */
class CodigosInfoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'codigos_info';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'codigos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modificadores_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nome' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'titulo' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descricao' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'img' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'beneficios' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'estruturacao em html,', 'precision' => null],
        'publico_alvo' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'estruturacao em html', 'precision' => null],
        'como_obter' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_codigos_info_codigos1_idx' => ['type' => 'index', 'columns' => ['codigos_id'], 'length' => []],
            'fk_codigos_info_modificadores1_idx' => ['type' => 'index', 'columns' => ['modificadores_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'codigos_id', 'modificadores_id'], 'length' => []],
            'id_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_codigos_info_codigos1' => ['type' => 'foreign', 'columns' => ['codigos_id'], 'references' => ['codigos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_codigos_info_modificadores1' => ['type' => 'foreign', 'columns' => ['modificadores_id'], 'references' => ['modificadores', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'codigos_id' => 1,
                'modificadores_id' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'titulo' => 'Lorem ipsum dolor sit amet',
                'descricao' => 'Lorem ipsum dolor sit amet',
                'img' => '',
                'beneficios' => '',
                'publico_alvo' => '',
                'como_obter' => '',
                'created' => '2019-01-13 02:19:14',
                'modified' => '2019-01-13 02:19:14'
            ],
        ];
        parent::init();
    }
}
