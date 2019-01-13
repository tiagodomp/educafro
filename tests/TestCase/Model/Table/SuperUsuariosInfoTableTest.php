<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SuperUsuariosInfoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SuperUsuariosInfoTable Test Case
 */
class SuperUsuariosInfoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SuperUsuariosInfoTable
     */
    public $SuperUsuariosInfo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SuperUsuariosInfo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SuperUsuariosInfo') ? [] : ['className' => SuperUsuariosInfoTable::class];
        $this->SuperUsuariosInfo = TableRegistry::getTableLocator()->get('SuperUsuariosInfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SuperUsuariosInfo);

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
