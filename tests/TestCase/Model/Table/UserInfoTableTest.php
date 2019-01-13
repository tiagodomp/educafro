<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserInfoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserInfoTable Test Case
 */
class UserInfoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserInfoTable
     */
    public $UserInfo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UserInfo',
        'app.User'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserInfo') ? [] : ['className' => UserInfoTable::class];
        $this->UserInfo = TableRegistry::getTableLocator()->get('UserInfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserInfo);

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
