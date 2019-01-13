<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerfisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerfisTable Test Case
 */
class PerfisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PerfisTable
     */
    public $Perfis;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Perfis'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Perfis') ? [] : ['className' => PerfisTable::class];
        $this->Perfis = TableRegistry::getTableLocator()->get('Perfis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Perfis);

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
