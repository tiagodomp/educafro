<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GruposDeAdministradoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GruposDeAdministradoresTable Test Case
 */
class GruposDeAdministradoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GruposDeAdministradoresTable
     */
    public $GruposDeAdministradores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GruposDeAdministradores',
        'app.Grupos',
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
        $config = TableRegistry::getTableLocator()->exists('GruposDeAdministradores') ? [] : ['className' => GruposDeAdministradoresTable::class];
        $this->GruposDeAdministradores = TableRegistry::getTableLocator()->get('GruposDeAdministradores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GruposDeAdministradores);

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
