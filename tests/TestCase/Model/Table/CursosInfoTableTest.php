<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CursosInfoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CursosInfoTable Test Case
 */
class CursosInfoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CursosInfoTable
     */
    public $CursosInfo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CursosInfo',
        'app.Cursos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CursosInfo') ? [] : ['className' => CursosInfoTable::class];
        $this->CursosInfo = TableRegistry::getTableLocator()->get('CursosInfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CursosInfo);

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
