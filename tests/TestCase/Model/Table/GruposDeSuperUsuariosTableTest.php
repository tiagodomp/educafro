<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GruposDeSuperUsuariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GruposDeSuperUsuariosTable Test Case
 */
class GruposDeSuperUsuariosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GruposDeSuperUsuariosTable
     */
    public $GruposDeSuperUsuarios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GruposDeSuperUsuarios',
        'app.Grupos',
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
        $config = TableRegistry::getTableLocator()->exists('GruposDeSuperUsuarios') ? [] : ['className' => GruposDeSuperUsuariosTable::class];
        $this->GruposDeSuperUsuarios = TableRegistry::getTableLocator()->get('GruposDeSuperUsuarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GruposDeSuperUsuarios);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
