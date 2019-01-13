<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerfisPreferenciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerfisPreferenciasTable Test Case
 */
class PerfisPreferenciasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PerfisPreferenciasTable
     */
    public $PerfisPreferencias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PerfisPreferencias',
        'app.Perfis',
        'app.PerfisUsers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PerfisPreferencias') ? [] : ['className' => PerfisPreferenciasTable::class];
        $this->PerfisPreferencias = TableRegistry::getTableLocator()->get('PerfisPreferencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PerfisPreferencias);

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
