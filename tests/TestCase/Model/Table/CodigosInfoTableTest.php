<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CodigosInfoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CodigosInfoTable Test Case
 */
class CodigosInfoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CodigosInfoTable
     */
    public $CodigosInfo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CodigosInfo',
        'app.Codigos',
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
        $config = TableRegistry::getTableLocator()->exists('CodigosInfo') ? [] : ['className' => CodigosInfoTable::class];
        $this->CodigosInfo = TableRegistry::getTableLocator()->get('CodigosInfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CodigosInfo);

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
