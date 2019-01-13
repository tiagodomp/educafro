<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdministradoresTokensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdministradoresTokensTable Test Case
 */
class AdministradoresTokensTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdministradoresTokensTable
     */
    public $AdministradoresTokens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AdministradoresTokens',
        'app.Administradores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AdministradoresTokens') ? [] : ['className' => AdministradoresTokensTable::class];
        $this->AdministradoresTokens = TableRegistry::getTableLocator()->get('AdministradoresTokens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdministradoresTokens);

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
