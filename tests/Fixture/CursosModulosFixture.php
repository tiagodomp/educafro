<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CursosModulosFixture
 *
 */
class CursosModulosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'estruturação de dados baseado no conceito de (https://uspdigital.usp.br/jupiterweb/obterTurma?sgldis=5955028&verdis=1)', 'autoIncrement' => true, 'precision' => null],
        'cursos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'grupos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'a turma deste módulo', 'precision' => null, 'autoIncrement' => null],
        'nome' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'abreviacao' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'titulo' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'matriz_curricular' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '[{disciplinas_id:[{temas_id:[{subtemas_id[{aulas_id}] }] }] }]', 'precision' => null],
        'tipo' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'requisitos_deste_modulo' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{´modulos´:[{descricao, cursos_id, cursos_modulos_id, intensidade:0-10}] }', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_cursos_modulos_cursos1_idx' => ['type' => 'index', 'columns' => ['cursos_id'], 'length' => []],
            'fk_cursos_modulos_grupos1_idx' => ['type' => 'index', 'columns' => ['grupos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'cursos_id', 'grupos_id'], 'length' => []],
            'id_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_cursos_modulos_cursos1' => ['type' => 'foreign', 'columns' => ['cursos_id'], 'references' => ['cursos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_cursos_modulos_grupos1' => ['type' => 'foreign', 'columns' => ['grupos_id'], 'references' => ['grupos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'grupos_id' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'abreviacao' => 'Lorem ipsum dolor sit amet',
                'titulo' => 'Lorem ipsum dolor sit amet',
                'matriz_curricular' => '',
                'tipo' => 'Lorem ipsum dolor sit amet',
                'requisitos_deste_modulo' => '',
                'created' => '2019-01-13 02:20:34',
                'modified' => '2019-01-13 02:20:34'
            ],
        ];
        parent::init();
    }
}
