<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RegrasHistoricoAtribuicoesFixture
 *
 */
class RegrasHistoricoAtribuicoesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_atribuicoes_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'info' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '´atribuicoes´:{ ´obteve´:[{regras_id, modificadores_id, datatime, maquinaIP}], ´definiu´:[{user_id,regras_id, datetime, maquinaIP}] }', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_regras_atribuir_permissoes_user_atribuicoes1_idx' => ['type' => 'index', 'columns' => ['user_atribuicoes_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'user_atribuicoes_id'], 'length' => []],
            'id_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_regras_atribuir_permissoes_user_atribuicoes1' => ['type' => 'foreign', 'columns' => ['user_atribuicoes_id'], 'references' => ['user_atribuicoes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'user_atribuicoes_id' => 1,
                'info' => '',
                'created' => '2019-01-13 02:18:11',
                'modified' => '2019-01-13 02:18:11'
            ],
        ];
        parent::init();
    }
}
