<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModificadoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModificadoresTable Test Case
 */
class ModificadoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ModificadoresTable
     */
    public $Modificadores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Modificadores',
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
        $config = TableRegistry::getTableLocator()->exists('Modificadores') ? [] : ['className' => ModificadoresTable::class];
        $this->Modificadores = TableRegistry::getTableLocator()->get('Modificadores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Modificadores);

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
