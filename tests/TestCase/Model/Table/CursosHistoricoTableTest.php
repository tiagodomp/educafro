<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CursosHistoricoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CursosHistoricoTable Test Case
 */
class CursosHistoricoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CursosHistoricoTable
     */
    public $CursosHistorico;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CursosHistorico',
        'app.CursosSecoes',
        'app.Log'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CursosHistorico') ? [] : ['className' => CursosHistoricoTable::class];
        $this->CursosHistorico = TableRegistry::getTableLocator()->get('CursosHistorico', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CursosHistorico);

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
