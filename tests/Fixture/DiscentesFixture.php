<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DiscentesFixture
 *
 */
class DiscentesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'regras_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ra' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'token_aluno' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'bonificacao' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'bonificacao_historico' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{[datetime:{provas_id:{provaID, minha_provaID, nota}} ]}', 'precision' => null],
        'aproveitamento' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{[cursos_id:[{cursos_modulos_id:[{disciplinas_id:[datetime:{provas_id:{provaID, minha_provaID, nota}}] }] }] ]}', 'precision' => null],
        'distancia_casa_sede' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => 'pontuacao gerada com o envolvimento e cumprimento das metas do sistema', 'precision' => null, 'fixed' => null],
        'monitor' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{ ´monitor´:true, ´disponibilidade´:[" ",´domingo´:{time_inicio, time_final}, ´segunda´:{time_inicio, time_final}, ´terca´:{time_inicio, time_final}, ´quarta´:{time_inicio, time_final}, ´quinta´:{time_inicio, time_final}, ´sexta´:{time_inicio, time_final}, ´sabado´:{time_inicio, time_final} ], grupos_id, disciplinas_id, ´pontuacao´:[total, datetime:{pontos, modificadores_id}, demandas_id]}', 'precision' => null],
        'presenca' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{script_metodo_verificacao_presenca, [{date:[presente:true, hora_chegada, hora_saida, relevancia:0-10, modificadores_id] }] }', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_alunos_user1_idx' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'fk_alunos_regras1_idx' => ['type' => 'index', 'columns' => ['regras_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'user_id', 'regras_id'], 'length' => []],
            'id_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_alunos_regras1' => ['type' => 'foreign', 'columns' => ['regras_id'], 'references' => ['regras', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_alunos_user1' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['user', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'user_id' => 1,
                'regras_id' => 1,
                'tipo' => 'Lorem ipsum dolor sit amet',
                'ra' => 'Lorem ipsum dolor sit amet',
                'token_aluno' => 'Lorem ipsum dolor sit amet',
                'bonificacao' => 1,
                'bonificacao_historico' => '',
                'aproveitamento' => '',
                'distancia_casa_sede' => 'Lorem ipsum dolor sit amet',
                'monitor' => '',
                'presenca' => '',
                'created' => '2019-01-13 02:25:57',
                'modified' => '2019-01-13 02:25:57'
            ],
        ];
        parent::init();
    }
}
