<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserAtribuicoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserAtribuicoesTable Test Case
 */
class UserAtribuicoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserAtribuicoesTable
     */
    public $UserAtribuicoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UserAtribuicoes',
        'app.User',
        'app.Eventos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserAtribuicoes') ? [] : ['className' => UserAtribuicoesTable::class];
        $this->UserAtribuicoes = TableRegistry::getTableLocator()->get('UserAtribuicoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserAtribuicoes);

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
