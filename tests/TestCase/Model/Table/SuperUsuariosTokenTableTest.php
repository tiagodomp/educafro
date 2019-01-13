<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SuperUsuariosTokenTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SuperUsuariosTokenTable Test Case
 */
class SuperUsuariosTokenTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SuperUsuariosTokenTable
     */
    public $SuperUsuariosToken;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SuperUsuariosToken',
        'app.SuperUsuarios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SuperUsuariosToken') ? [] : ['className' => SuperUsuariosTokenTable::class];
        $this->SuperUsuariosToken = TableRegistry::getTableLocator()->get('SuperUsuariosToken', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SuperUsuariosToken);

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
