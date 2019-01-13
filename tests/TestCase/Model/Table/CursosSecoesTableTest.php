<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CursosSecoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CursosSecoesTable Test Case
 */
class CursosSecoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CursosSecoesTable
     */
    public $CursosSecoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CursosSecoes',
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
        $config = TableRegistry::getTableLocator()->exists('CursosSecoes') ? [] : ['className' => CursosSecoesTable::class];
        $this->CursosSecoes = TableRegistry::getTableLocator()->get('CursosSecoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CursosSecoes);

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
