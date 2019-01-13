<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CursosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CursosTable Test Case
 */
class CursosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CursosTable
     */
    public $Cursos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Cursos',
        'app.Modificadores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Cursos') ? [] : ['className' => CursosTable::class];
        $this->Cursos = TableRegistry::getTableLocator()->get('Cursos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cursos);

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
