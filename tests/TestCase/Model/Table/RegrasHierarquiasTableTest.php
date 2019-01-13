<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegrasHierarquiasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegrasHierarquiasTable Test Case
 */
class RegrasHierarquiasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RegrasHierarquiasTable
     */
    public $RegrasHierarquias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.RegrasHierarquias',
        'app.RegrasPermicaoCrud',
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
        $config = TableRegistry::getTableLocator()->exists('RegrasHierarquias') ? [] : ['className' => RegrasHierarquiasTable::class];
        $this->RegrasHierarquias = TableRegistry::getTableLocator()->get('RegrasHierarquias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RegrasHierarquias);

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
