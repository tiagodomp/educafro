<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RegrasFixture
 *
 */
class RegrasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'grupos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Cada regra criada, sera gerado um GRUPOS, onde sera adicionado todos os GRUPOS_MEMBROS pertencentes a essa regra', 'precision' => null, 'autoIncrement' => null],
        'regras_hierarquias_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cargo' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'status' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descricao' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null],
        'info' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'funções que este cargo exerce, contendo links para cada grupo gerado automaticamente', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modificadores_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_regras_grupos1_idx' => ['type' => 'index', 'columns' => ['grupos_id'], 'length' => []],
            'fk_regras_regras_hierarquias1_idx' => ['type' => 'index', 'columns' => ['regras_hierarquias_id'], 'length' => []],
            'fk_regras_modificadores1_idx' => ['type' => 'index', 'columns' => ['modificadores_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'grupos_id', 'regras_hierarquias_id', 'modificadores_id'], 'length' => []],
            'id_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_regras_grupos1' => ['type' => 'foreign', 'columns' => ['grupos_id'], 'references' => ['grupos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_regras_modificadores1' => ['type' => 'foreign', 'columns' => ['modificadores_id'], 'references' => ['modificadores', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_regras_regras_hierarquias1' => ['type' => 'foreign', 'columns' => ['regras_hierarquias_id'], 'references' => ['regras_hierarquias', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'regras_hierarquias_id' => 1,
                'cargo' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ipsum dolor sit amet',
                'descricao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'info' => '',
                'created' => '2019-01-13 02:17:44',
                'modified' => '2019-01-13 02:17:44',
                'modificadores_id' => 1
            ],
        ];
        parent::init();
    }
}
