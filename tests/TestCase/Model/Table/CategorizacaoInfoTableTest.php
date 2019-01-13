<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategorizacaoInfoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategorizacaoInfoTable Test Case
 */
class CategorizacaoInfoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategorizacaoInfoTable
     */
    public $CategorizacaoInfo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CategorizacaoInfo',
        'app.Categorizacao'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CategorizacaoInfo') ? [] : ['className' => CategorizacaoInfoTable::class];
        $this->CategorizacaoInfo = TableRegistry::getTableLocator()->get('CategorizacaoInfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategorizacaoInfo);

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
