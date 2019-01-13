<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogTable Test Case
 */
class LogTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LogTable
     */
    public $Log;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Log',
        'app.Users',
        'app.MysqlLogs',
        'app.Cursos',
        'app.CursosModulos',
        'app.Eventos',
        'app.CursosHistorico',
        'app.GruposHistorico',
        'app.UserHistoricoAcoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Log') ? [] : ['className' => LogTable::class];
        $this->Log = TableRegistry::getTableLocator()->get('Log', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Log);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
