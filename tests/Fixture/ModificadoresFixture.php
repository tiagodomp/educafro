<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ModificadoresFixture
 *
 */
class ModificadoresFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_historico_acoes_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'rastreador_rotas' => ['type' => 'json', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'acesso:[{datetime:[{modificadoID: [descricao, logID], maquinaIP:[remote, remote_cloudFlare, remote_Incapsula, remote_sucuri, client, x_for, x, forwarded_for, forwarded], local:[ latitude, longitude,pais,estado,cidade] }] }]', 'precision' => null],
        '_indexes' => [
            'fk_modificadores_user_historico_acoes1_idx' => ['type' => 'index', 'columns' => ['user_historico_acoes_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'user_historico_acoes_id'], 'length' => []],
            'id_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_modificadores_user_historico_acoes1' => ['type' => 'foreign', 'columns' => ['user_historico_acoes_id'], 'references' => ['user_historico_acoes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'user_historico_acoes_id' => 1,
                'rastreador_rotas' => ''
            ],
        ];
        parent::init();
    }
}
