<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegrasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegrasTable Test Case
 */
class RegrasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RegrasTable
     */
    public $Regras;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Regras',
        'app.Grupos',
        'app.RegrasHierarquias',
        'app.Modificadores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Regras') ? [] : ['className' => RegrasTable::class];
        $this->Regras = TableRegistry::getTableLocator()->get('Regras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Regras);

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
