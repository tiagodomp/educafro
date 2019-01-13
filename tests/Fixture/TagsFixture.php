<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TagsFixture
 *
 */
class TagsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'modificadores_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tags_tags_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'esta tabela foi gerada com migrations, do plugin Tags, e a gestão por ele também', 'precision' => null, 'autoIncrement' => null],
        'tags_tagged_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lista' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '[quantidade,{referenciaID, modificadores_id, datetime}]', 'precision' => null],
        '_indexes' => [
            'fk_tags_modificadores1_idx' => ['type' => 'index', 'columns' => ['modificadores_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'modificadores_id', 'tags_tags_id', 'tags_tagged_id'], 'length' => []],
            'id_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_tags_modificadores1' => ['type' => 'foreign', 'columns' => ['modificadores_id'], 'references' => ['modificadores', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'modificadores_id' => 1,
                'tags_tags_id' => 1,
                'tags_tagged_id' => 1,
                'lista' => ''
            ],
        ];
        parent::init();
    }
}
