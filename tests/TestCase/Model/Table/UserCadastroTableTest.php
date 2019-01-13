<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserCadastroTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserCadastroTable Test Case
 */
class UserCadastroTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserCadastroTable
     */
    public $UserCadastro;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UserCadastro',
        'app.Modificadores',
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
        $config = TableRegistry::getTableLocator()->exists('UserCadastro') ? [] : ['className' => UserCadastroTable::class];
        $this->UserCadastro = TableRegistry::getTableLocator()->get('UserCadastro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserCadastro);

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
