<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AulasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AulasTable Test Case
 */
class AulasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AulasTable
     */
    public $Aulas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Aulas',
        'app.Subtemas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Aulas') ? [] : ['className' => AulasTable::class];
        $this->Aulas = TableRegistry::getTableLocator()->get('Aulas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Aulas);

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
