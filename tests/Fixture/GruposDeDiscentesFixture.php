<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GruposDeDiscentesFixture
 *
 */
class GruposDeDiscentesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'grupos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'discentes_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_grupos_de_discentes_discentes1_idx' => ['type' => 'index', 'columns' => ['discentes_id'], 'length' => []],
            'fk_grupos_de_discentes_grupos1_idx' => ['type' => 'index', 'columns' => ['grupos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['grupos_id', 'discentes_id'], 'length' => []],
            'fk_grupos_de_discentes_discentes1' => ['type' => 'foreign', 'columns' => ['discentes_id'], 'references' => ['discentes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_grupos_de_discentes_grupos1' => ['type' => 'foreign', 'columns' => ['grupos_id'], 'references' => ['grupos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'grupos_id' => 1,
                'discentes_id' => 1,
                'created' => '2019-01-13 02:28:29',
                'modified' => '2019-01-13 02:28:29'
            ],
        ];
        parent::init();
    }
}
