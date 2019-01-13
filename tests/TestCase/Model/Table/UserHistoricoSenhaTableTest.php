<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserHistoricoSenhaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserHistoricoSenhaTable Test Case
 */
class UserHistoricoSenhaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserHistoricoSenhaTable
     */
    public $UserHistoricoSenha;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UserHistoricoSenha',
        'app.User'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserHistoricoSenha') ? [] : ['className' => UserHistoricoSenhaTable::class];
        $this->UserHistoricoSenha = TableRegistry::getTableLocator()->get('UserHistoricoSenha', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserHistoricoSenha);

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
