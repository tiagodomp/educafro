<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GruposDeVoluntariosFixture
 *
 */
class GruposDeVoluntariosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'grupos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'voluntarios_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_grupos_de_voluntarios_voluntarios1_idx' => ['type' => 'index', 'columns' => ['voluntarios_id'], 'length' => []],
            'fk_grupos_de_voluntarios_grupos1_idx' => ['type' => 'index', 'columns' => ['grupos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['grupos_id', 'voluntarios_id'], 'length' => []],
            'fk_grupos_de_voluntarios_grupos1' => ['type' => 'foreign', 'columns' => ['grupos_id'], 'references' => ['grupos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_grupos_de_voluntarios_voluntarios1' => ['type' => 'foreign', 'columns' => ['voluntarios_id'], 'references' => ['voluntarios', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'voluntarios_id' => 1
            ],
        ];
        parent::init();
    }
}
