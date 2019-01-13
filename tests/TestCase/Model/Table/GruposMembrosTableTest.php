<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GruposMembrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GruposMembrosTable Test Case
 */
class GruposMembrosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GruposMembrosTable
     */
    public $GruposMembros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GruposMembros',
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
        $config = TableRegistry::getTableLocator()->exists('GruposMembros') ? [] : ['className' => GruposMembrosTable::class];
        $this->GruposMembros = TableRegistry::getTableLocator()->get('GruposMembros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GruposMembros);

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
