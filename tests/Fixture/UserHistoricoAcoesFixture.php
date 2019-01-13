<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserHistoricoAcoesFixture
 *
 */
class UserHistoricoAcoesFixture extends TestFixture
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
        'log_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'acoes' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '[{datetime:[{ eventos_id, modificadores_id.modificadoID, msg, request, historicoID, ´rotas´:[{nome, uriTemplate, defaults}]  }] }]', 'precision' => null],
        'acessos' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{ [{ localID:[ latitude, longitude,pais,estado,cidade], datetime:[remote, remote_cloudFlare, remote_Incapsula, remote_sucuri, client, x_for, x, forwarded_for, forwarded]} ]} localID = timestamp´_´latitude´&´longitude', 'precision' => null],
        'uploads' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => '{´imagens´:[{ ´imgID´ = ´img´+´_´+timestamp+´_´+perfil_id;, ´nome´: imgID´-original´, 
titulo, descricao, alt,´metadata´:{array}, extensao, data_upload,  maquinaIP, ´publico_sistema´:true, ´publico_web´:false, path, ´arquivos´:[ imgID´-views´:{imgID-resolucao, ...} ] }], ´pdfs´:[{ ´pdfID´ = ´pdf´+´_´+timestamp+´_´+perfil_id;, ´nome´: pdfID´-original´, 
titulo, descricao, alt,´metadata´:{array}, extensao, data_upload,  maquinaIP, ´publico_sistema´:true, ´publico_web´:false, path, ´arquivos´:[ pdfID´-views´:{pdfID-resolucao, ...} }], docs:[{´docID´ = ´doc´+´_´+timestamp+´_´+perfil_id;, ´nome´: docID´-original´, 
titulo, descricao, alt,´metadata´:{array}, extensao, data_upload,  maquinaIP, ´publico_sistema´:true, ´publico_web´:false, path, ´arquivos´:[ docID´-views´:{docID-resolucao, ...} }], ´videos´:[{ ´videoID´ = ´video´+´_´+timestamp+´_´+perfil_id;, ´nome´: videoID´-original´, 
titulo, descricao, alt,´metadata´:{array}, ext', 'precision' => null],
        '_indexes' => [
            'fk_user_historico_acoes_user1_idx' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'fk_user_historico_acoes_log1_idx' => ['type' => 'index', 'columns' => ['log_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'user_id', 'log_id'], 'length' => []],
            'id_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_user_historico_acoes_log1' => ['type' => 'foreign', 'columns' => ['log_id'], 'references' => ['log', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_user_historico_acoes_user1' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['user', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'log_id' => 1,
                'acoes' => '',
                'acessos' => '',
                'uploads' => ''
            ],
        ];
        parent::init();
    }
}
