<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GruposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GruposTable Test Case
 */
class GruposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GruposTable
     */
    public $Grupos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Grupos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Grupos') ? [] : ['className' => GruposTable::class];
        $this->Grupos = TableRegistry::getTableLocator()->get('Grupos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Grupos);

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
