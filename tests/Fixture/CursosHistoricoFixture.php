<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CursosHistoricoFixture
 *
 */
class CursosHistoricoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'cursos_historico';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'cursos_secoes_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'log_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ultima_data_iniciada' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'ultima_data_finalizada' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'ultimo_status' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'historico' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{´logica_aplicacao_json´:[ ], ´aplicacao_json´:{}  }', 'precision' => null],
        'historico_aproveitamento' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{´gerar_estatisticas´:[diarias:false, semanais:true, mensais:true], [{´aprovados´:[{user_id[{ cursos_modulos_id:[{media_por_disciplinaID}], discentes_id, }]  }] }', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_cursos_historico_log1_idx' => ['type' => 'index', 'columns' => ['log_id'], 'length' => []],
            'fk_cursos_historico_cursos_secoes1_idx' => ['type' => 'index', 'columns' => ['cursos_secoes_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'cursos_secoes_id', 'log_id'], 'length' => []],
            'idcursos_historico_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_cursos_historico_log1' => ['type' => 'foreign', 'columns' => ['log_id'], 'references' => ['log', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_unicode_ci'
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
                'cursos_secoes_id' => 1,
                'log_id' => 1,
                'ultima_data_iniciada' => '2019-01-13',
                'ultima_data_finalizada' => '2019-01-13',
                'ultimo_status' => 'Lorem ipsum dolor sit amet',
                'historico' => '',
                'historico_aproveitamento' => '',
                'created' => '2019-01-13 02:20:12',
                'modified' => '2019-01-13 02:20:12'
            ],
        ];
        parent::init();
    }
}
