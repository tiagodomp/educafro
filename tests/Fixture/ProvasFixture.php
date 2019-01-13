<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProvasFixture
 *
 */
class ProvasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'disciplinas_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'provas_anima_id' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => 'token da prova vinda do sistema do Oldimar', 'precision' => null, 'fixed' => null],
        'provas' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '[{cursos_secoes_id:[disciplinas_id:[{provaID:[{ anima_provas_id, titulo, nome, data_aplicacao, data_elaborada, modificadores_id,´questoes´:[{ questao1, questão2, ... }],minha_provaID:[{discentes_id, user_id, ´respostas´:[questão1] }] }] }] }] - provaID = timestamp´_´ disciplina_id; minha_provaID = timestamp´_´user_id;', 'precision' => null],
        'gabarito' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{}', 'precision' => null],
        'notas' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '[{cursos_secoes_id:[{grupos_id:[{discentes_id, user_id, provaID:[nota, erros:[{ questao1, questao2, ... }],minha_provaID, ´recomendacoes_anima´:{} ] }] }] }]  - provaID = timestamp´_´ disciplina_id; minha_provaID = timestamp´_´user_id;', 'precision' => null],
        'info_anima' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modificadores_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_provas_disciplinas_idx' => ['type' => 'index', 'columns' => ['disciplinas_id'], 'length' => []],
            'fk_provas_modificadores1_idx' => ['type' => 'index', 'columns' => ['modificadores_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'disciplinas_id', 'modificadores_id'], 'length' => []],
            'id_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_provas_disciplinas' => ['type' => 'foreign', 'columns' => ['disciplinas_id'], 'references' => ['disciplinas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_provas_modificadores1' => ['type' => 'foreign', 'columns' => ['modificadores_id'], 'references' => ['modificadores', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'disciplinas_id' => 1,
                'tipo' => 'Lorem ipsum dolor sit amet',
                'provas_anima_id' => 'Lorem ipsum dolor sit amet',
                'provas' => '',
                'gabarito' => '',
                'notas' => '',
                'info_anima' => '',
                'created' => '2019-01-13 02:29:55',
                'modified' => '2019-01-13 02:29:55',
                'modificadores_id' => 1
            ],
        ];
        parent::init();
    }
}
