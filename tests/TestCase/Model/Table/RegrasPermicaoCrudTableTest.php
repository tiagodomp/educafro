<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegrasPermicaoCrudTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegrasPermicaoCrudTable Test Case
 */
class RegrasPermicaoCrudTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RegrasPermicaoCrudTable
     */
    public $RegrasPermicaoCrud;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.RegrasPermicaoCrud',
        'app.RegrasHierarquias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RegrasPermicaoCrud') ? [] : ['className' => RegrasPermicaoCrudTable::class];
        $this->RegrasPermicaoCrud = TableRegistry::getTableLocator()->get('RegrasPermicaoCrud', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RegrasPermicaoCrud);

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
