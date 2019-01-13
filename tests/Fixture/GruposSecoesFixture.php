<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GruposSecoesFixture
 *
 */
class GruposSecoesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'grupos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'titulo' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'inscritos' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{quantidade, ´alunos´:[{user_inscricoes_id,  discentes_id, curso_ modulo_id, datetime, ´documentacao´:{requisitos:false, ´faltando´:[{arq_doc, link_instrucoes, retorno_html }] } }] }', 'precision' => null],
        'pendentes' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{quantidade, ´alunos´:[{user_inscricoes_id, discentes_id,curso_ modulo_id, datetime, ´documentacao´:{requisitos:false, ´faltando´:[{arq_doc, link_instrucoes, retorno_html  }] } }] }', 'precision' => null],
        'matriculados' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{quantidade, ´alunos´:[{user_inscricoes_id,  discentes_id,curso_ modulo_id, datetime, ´documentacao´:{requisitos:false, ´faltando´:[{arq_doc, link_instrucoes, retorno_html }] } }] }', 'precision' => null],
        'rejeitados' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{quantidade, ´alunos´:[{user_inscricoes_id,  discentes_id,curso_ modulo_id, datetime, ´documentacao´:{requisitos:false, ´faltando´:[{arq_doc, link_instrucoes, retorno_html }] } }] }', 'precision' => null],
        'descricao' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => '', 'precision' => null],
        'codigo_do_grupo' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_520_ci', 'comment' => 'timestamp_+id', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_grupos_secoes_grupos1_idx' => ['type' => 'index', 'columns' => ['grupos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'grupos_id'], 'length' => []],
            'idgrupos_secoes_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_grupos_secoes_grupos1' => ['type' => 'foreign', 'columns' => ['grupos_id'], 'references' => ['grupos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'grupos_id' => 1,
                'titulo' => 'Lorem ipsum dolor sit amet',
                'inscritos' => '',
                'pendentes' => '',
                'matriculados' => '',
                'rejeitados' => '',
                'descricao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'codigo_do_grupo' => 'Lorem ipsum dolor sit amet',
                'created' => '2019-01-13 02:27:44',
                'modified' => '2019-01-13 02:27:44'
            ],
        ];
        parent::init();
    }
}
