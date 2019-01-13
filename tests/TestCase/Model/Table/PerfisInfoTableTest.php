<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerfisInfoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerfisInfoTable Test Case
 */
class PerfisInfoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PerfisInfoTable
     */
    public $PerfisInfo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PerfisInfo',
        'app.Perfis',
        'app.PerfisUsers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PerfisInfo') ? [] : ['className' => PerfisInfoTable::class];
        $this->PerfisInfo = TableRegistry::getTableLocator()->get('PerfisInfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PerfisInfo);

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
