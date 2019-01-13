<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdministradoresAcoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdministradoresAcoesTable Test Case
 */
class AdministradoresAcoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdministradoresAcoesTable
     */
    public $AdministradoresAcoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AdministradoresAcoes',
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
        $config = TableRegistry::getTableLocator()->exists('AdministradoresAcoes') ? [] : ['className' => AdministradoresAcoesTable::class];
        $this->AdministradoresAcoes = TableRegistry::getTableLocator()->get('AdministradoresAcoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdministradoresAcoes);

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
