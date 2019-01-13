<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CodigosTagsFixture
 *
 */
class CodigosTagsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'modificadores_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'quem, quando e da onde criou ou alterou um modelo de codigos_tags', 'precision' => null, 'autoIncrement' => null],
        'nome' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'abreviatura' => ['type' => 'string', 'length' => 16, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'pertencentes' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '[{quantidade,{codigos_id} }]', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_codigos_tags_modificadores1_idx' => ['type' => 'index', 'columns' => ['modificadores_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'modificadores_id'], 'length' => []],
            'id_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_codigos_tags_modificadores1' => ['type' => 'foreign', 'columns' => ['modificadores_id'], 'references' => ['modificadores', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'nome' => 'Lorem ipsum dolor sit amet',
                'abreviatura' => 'Lorem ipsum do',
                'pertencentes' => '',
                'created' => '2019-01-13 02:19:19',
                'modified' => '2019-01-13 02:19:19'
            ],
        ];
        parent::init();
    }
}
