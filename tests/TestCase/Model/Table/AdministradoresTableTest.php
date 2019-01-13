<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdministradoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdministradoresTable Test Case
 */
class AdministradoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdministradoresTable
     */
    public $Administradores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Administradores',
        'app.Regras',
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
        $config = TableRegistry::getTableLocator()->exists('Administradores') ? [] : ['className' => AdministradoresTable::class];
        $this->Administradores = TableRegistry::getTableLocator()->get('Administradores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Administradores);

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
