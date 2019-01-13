<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserHistoricoAcoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserHistoricoAcoesTable Test Case
 */
class UserHistoricoAcoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserHistoricoAcoesTable
     */
    public $UserHistoricoAcoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UserHistoricoAcoes',
        'app.User',
        'app.Log'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserHistoricoAcoes') ? [] : ['className' => UserHistoricoAcoesTable::class];
        $this->UserHistoricoAcoes = TableRegistry::getTableLocator()->get('UserHistoricoAcoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserHistoricoAcoes);

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
