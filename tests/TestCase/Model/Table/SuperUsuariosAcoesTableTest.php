<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SuperUsuariosAcoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SuperUsuariosAcoesTable Test Case
 */
class SuperUsuariosAcoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SuperUsuariosAcoesTable
     */
    public $SuperUsuariosAcoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SuperUsuariosAcoes',
        'app.SuperUsuarios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SuperUsuariosAcoes') ? [] : ['className' => SuperUsuariosAcoesTable::class];
        $this->SuperUsuariosAcoes = TableRegistry::getTableLocator()->get('SuperUsuariosAcoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SuperUsuariosAcoes);

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
