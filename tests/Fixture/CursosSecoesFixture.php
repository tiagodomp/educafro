<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CursosSecoesFixture
 *
 */
class CursosSecoesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'cursos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'quantas' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'baseado no tipo define um valor inteiro de repetição EXPL: (quantas->2, tipo->semanal) = 2 semanas. Esta seção durará 2 semanas.', 'precision' => null, 'autoIncrement' => null],
        'docentes' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '[{docentes_id:[{subtemas_id:{ tipo:[substituto, titular], dias_aula:[" ",domingo:{time_inicio, time_final}, segunda:{time_inicio, time_final}, terca:{time_inicio, time_final}, quarta:{time_inicio, time_final}, quinta:{time_inicio, time_final}, sexta:{time_inicio, time_final}, sabado:{time_inicio, time_final} ] } }] }]', 'precision' => null],
        'discentes' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '[{discentes_id:[{cursos_modulos_id:{ tipo:[pendente, matriculados], dias_aula:[" ",domingo:{time_inicio, time_final}, segunda:{time_inicio, time_final}, terca:{time_inicio, time_final}, quarta:{time_inicio, time_final}, quinta:{time_inicio, time_final}, sexta:{time_inicio, time_final}, sabado:{time_inicio, time_final} ] } }] }]', 'precision' => null],
        'data_inicio_modulo' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '[{cursos_modulos_id, date}]', 'precision' => null],
        'data_final_modulo' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '[{cursos_modulos_id, date}]', 'precision' => null],
        'codigo_turma' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'equivale a cursos_secoes_id.codigo_do_grupo', 'precision' => null, 'autoIncrement' => null],
        'vagas' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'carga_horaria' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'prox_secao' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'visivel' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'data_inicio_cadastro' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'data_final_cadastro' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_cursos_secoes_cursos1_idx' => ['type' => 'index', 'columns' => ['cursos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'cursos_id'], 'length' => []],
            'id_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'codigo_turma_UNIQUE' => ['type' => 'unique', 'columns' => ['codigo_turma'], 'length' => []],
            'fk_cursos_secoes_cursos1' => ['type' => 'foreign', 'columns' => ['cursos_id'], 'references' => ['cursos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'cursos_id' => 1,
                'tipo' => 'Lorem ipsum dolor sit amet',
                'quantas' => 1,
                'docentes' => '',
                'discentes' => '',
                'data_inicio_modulo' => '',
                'data_final_modulo' => '',
                'codigo_turma' => 1,
                'vagas' => 1,
                'carga_horaria' => 'Lorem ipsum dolor sit amet',
                'prox_secao' => '2019-01-13',
                'visivel' => 1,
                'data_inicio_cadastro' => '2019-01-13',
                'data_final_cadastro' => '2019-01-13',
                'created' => '2019-01-13 02:20:06',
                'modified' => '2019-01-13 02:20:06'
            ],
        ];
        parent::init();
    }
}
