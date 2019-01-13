<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CursosModulosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CursosModulosTable Test Case
 */
class CursosModulosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CursosModulosTable
     */
    public $CursosModulos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CursosModulos',
        'app.Cursos',
        'app.Grupos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CursosModulos') ? [] : ['className' => CursosModulosTable::class];
        $this->CursosModulos = TableRegistry::getTableLocator()->get('CursosModulos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CursosModulos);

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
