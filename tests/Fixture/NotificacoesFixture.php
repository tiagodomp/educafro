<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NotificacoesFixture
 *
 */
class NotificacoesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'todas as notificações emitidas ao receptor user_id', 'precision' => null, 'autoIncrement' => null],
        'nao_visualizadas' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'instancias' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '[{nome_do_model_emissor:[{ emissorID:[{ datetime:[titulo, msg_completa, msg_html, msg_pequena, msg_format, data_criada ], contextoURL, contextoURI, contextoNOME, eventos_id, tags_id1,tags_id2, tags_id3, visualizada:false, data_visualizada}] }] }]', 'precision' => null],
        'tempo_medio_resposta' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'data_criada - data-visualizada de todas as notificações.instancias onde visualizadas:true', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_notificacoes_user1_idx' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'user_id'], 'length' => []],
            'id_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_notificacoes_user1' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['user', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'nao_visualizadas' => 1,
                'instancias' => '',
                'tempo_medio_resposta' => 1,
                'created' => '2019-01-13 02:29:24',
                'modified' => '2019-01-13 02:29:24'
            ],
        ];
        parent::init();
    }
}
