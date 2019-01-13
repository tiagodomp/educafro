<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GruposDeAdministradoresFixture
 *
 */
class GruposDeAdministradoresFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'grupos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'administradores_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_grupos_de_administradores_administradores1_idx' => ['type' => 'index', 'columns' => ['administradores_id'], 'length' => []],
            'fk_grupos_de_administradores_grupos1_idx' => ['type' => 'index', 'columns' => ['grupos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['grupos_id', 'administradores_id'], 'length' => []],
            'fk_grupos_de_administradores_administradores1' => ['type' => 'foreign', 'columns' => ['administradores_id'], 'references' => ['administradores', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_grupos_de_administradores_grupos1' => ['type' => 'foreign', 'columns' => ['grupos_id'], 'references' => ['grupos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'administradores_id' => 1,
                'created' => '2019-01-13 02:28:20',
                'modified' => '2019-01-13 02:28:20'
            ],
        ];
        parent::init();
    }
}
