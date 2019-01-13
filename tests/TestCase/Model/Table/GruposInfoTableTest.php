<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GruposInfoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GruposInfoTable Test Case
 */
class GruposInfoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GruposInfoTable
     */
    public $GruposInfo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GruposInfo',
        'app.Grupos',
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
        $config = TableRegistry::getTableLocator()->exists('GruposInfo') ? [] : ['className' => GruposInfoTable::class];
        $this->GruposInfo = TableRegistry::getTableLocator()->get('GruposInfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GruposInfo);

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
