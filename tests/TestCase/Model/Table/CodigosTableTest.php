<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CodigosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CodigosTable Test Case
 */
class CodigosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CodigosTable
     */
    public $Codigos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Codigos',
        'app.CodigosTags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Codigos') ? [] : ['className' => CodigosTable::class];
        $this->Codigos = TableRegistry::getTableLocator()->get('Codigos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Codigos);

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
