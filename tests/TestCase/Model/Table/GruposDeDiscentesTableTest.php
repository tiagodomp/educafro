<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GruposDeDiscentesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GruposDeDiscentesTable Test Case
 */
class GruposDeDiscentesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GruposDeDiscentesTable
     */
    public $GruposDeDiscentes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GruposDeDiscentes',
        'app.Grupos',
        'app.Discentes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GruposDeDiscentes') ? [] : ['className' => GruposDeDiscentesTable::class];
        $this->GruposDeDiscentes = TableRegistry::getTableLocator()->get('GruposDeDiscentes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GruposDeDiscentes);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
