<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdministradoresInfoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdministradoresInfoTable Test Case
 */
class AdministradoresInfoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdministradoresInfoTable
     */
    public $AdministradoresInfo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AdministradoresInfo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AdministradoresInfo') ? [] : ['className' => AdministradoresInfoTable::class];
        $this->AdministradoresInfo = TableRegistry::getTableLocator()->get('AdministradoresInfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdministradoresInfo);

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
