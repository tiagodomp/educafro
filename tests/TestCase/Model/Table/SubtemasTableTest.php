<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubtemasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubtemasTable Test Case
 */
class SubtemasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SubtemasTable
     */
    public $Subtemas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Subtemas',
        'app.Temas',
        'app.Docentes',
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
        $config = TableRegistry::getTableLocator()->exists('Subtemas') ? [] : ['className' => SubtemasTable::class];
        $this->Subtemas = TableRegistry::getTableLocator()->get('Subtemas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Subtemas);

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
