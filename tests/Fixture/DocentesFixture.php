<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DocentesFixture
 *
 */
class DocentesFixture extends TestFixture
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
        'tipo' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'presenca' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{script_metodo_verificacao_presenca, [{date:[presente:true, hora_chegada, hora_saida, relevancia:0-10, modificadores_id] }] }', 'precision' => null],
        'pontuacao' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'pontuacao gerada com o envolvimento e cumprimento das metas do sistema', 'precision' => null, 'autoIncrement' => null],
        'distancia_casa_sede' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'avaliacao_alunos' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{script_metodo_avaliacao_alunos, cursos_modulos_id:[timestamp:{total_alunos_participantes, datetime:{media_aulas, media_subtemas, media_apresentacao, media_dominio_conteudo, media_planejamento, media_didatica, media_tecnicas_ensino, media_estimulo, media_orientacao_atividades, media_relacionamento, media_interesse_apendizagem, media_tecnicas_avaliacao, media_estimulos_critico, media_cumprir_horarios, media_assiduidade_aulas, media_atendimento_presencial, media_atendimento_online } }] }

baseado em : http://www.scielo.br/scielo.php?script=sci_arttext&pid=S0104-40362004000400004', 'precision' => null],
        'avaliacao_dirigentes' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{script_metodo_avaliacao_dirigentes, cursos_secoes_id:[timestamp:{total_dirigentes_participantes, datetime:{ media_relacionamento, media_tecnicas_avaliacao, media_cumprir_horarios, media_cumprir_datas, media_comprometimento, media_assiduidade_aulas} }] }

baseado em : http://www.scielo.br/scielo.php?script=sci_arttext&pid=S0104-40362004000400004', 'precision' => null],
        'dias_disponiveis' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{´disponibilidade´:[" ",´domingo´:{time_inicio, time_final}, ´segunda´:{time_inicio, time_final}, ´terca´:{time_inicio, time_final}, ´quarta´:{time_inicio, time_final}, ´quinta´:{time_inicio, time_final}, ´sexta´:{time_inicio, time_final}, ´sabado´:{time_inicio, time_final} ] }', 'precision' => null],
        'meus_alunos' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{ [cursos_id:[{disciplinas_id:[{grupos_id:[{temas_id}] }] }] ] }', 'precision' => null],
        'conselheiro' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{ ´conselheiro´:true, ´disponibilidade´:[" ",´domingo´:{time_inicio, time_final}, ´segunda´:{time_inicio, time_final}, ´terca´:{time_inicio, time_final}, ´quarta´:{time_inicio, time_final}, ´quinta´:{time_inicio, time_final}, ´sexta´:{time_inicio, time_final}, ´sabado´:{time_inicio, time_final} ], grupos_id, disciplinas_id, ´pontuacao´:[total, datetime:{pontos, modificadores_id}, demandas_id]}', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_professores_user1_idx' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'fk_professores_regras1_idx' => ['type' => 'index', 'columns' => ['regras_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'user_id', 'regras_id'], 'length' => []],
            'id_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_professores_regras1' => ['type' => 'foreign', 'columns' => ['regras_id'], 'references' => ['regras', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_professores_user1' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['user', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'user_id' => 1,
                'regras_id' => 1,
                'tipo' => 'Lorem ipsum dolor sit amet',
                'presenca' => '',
                'pontuacao' => 1,
                'distancia_casa_sede' => 'Lorem ipsum dolor sit amet',
                'avaliacao_alunos' => '',
                'avaliacao_dirigentes' => '',
                'dias_disponiveis' => '',
                'meus_alunos' => '',
                'conselheiro' => '',
                'modified' => '2019-01-13 02:26:30'
            ],
        ];
        parent::init();
    }
}
