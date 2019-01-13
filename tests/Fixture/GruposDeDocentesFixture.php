<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GruposDeDocentesFixture
 *
 */
class GruposDeDocentesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'grupos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'docentes_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_grupos_de_docentes_docentes1_idx' => ['type' => 'index', 'columns' => ['docentes_id'], 'length' => []],
            'fk_grupos_de_docentes_grupos1_idx' => ['type' => 'index', 'columns' => ['grupos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['grupos_id', 'docentes_id'], 'length' => []],
            'fk_grupos_de_docentes_docentes1' => ['type' => 'foreign', 'columns' => ['docentes_id'], 'references' => ['docentes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_grupos_de_docentes_grupos1' => ['type' => 'foreign', 'columns' => ['grupos_id'], 'references' => ['grupos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'docentes_id' => 1,
                'created' => '2019-01-13 02:28:37',
                'modified' => '2019-01-13 02:28:37'
            ],
        ];
        parent::init();
    }
}
