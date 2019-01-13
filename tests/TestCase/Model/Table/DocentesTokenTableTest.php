<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocentesTokenTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocentesTokenTable Test Case
 */
class DocentesTokenTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DocentesTokenTable
     */
    public $DocentesToken;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DocentesToken',
        'app.Docentes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DocentesToken') ? [] : ['className' => DocentesTokenTable::class];
        $this->DocentesToken = TableRegistry::getTableLocator()->get('DocentesToken', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DocentesToken);

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
