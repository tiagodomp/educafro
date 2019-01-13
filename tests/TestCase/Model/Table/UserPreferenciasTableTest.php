<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserPreferenciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserPreferenciasTable Test Case
 */
class UserPreferenciasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserPreferenciasTable
     */
    public $UserPreferencias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UserPreferencias',
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
        $config = TableRegistry::getTableLocator()->exists('UserPreferencias') ? [] : ['className' => UserPreferenciasTable::class];
        $this->UserPreferencias = TableRegistry::getTableLocator()->get('UserPreferencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserPreferencias);

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
