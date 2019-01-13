<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GruposDeDocentesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GruposDeDocentesTable Test Case
 */
class GruposDeDocentesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GruposDeDocentesTable
     */
    public $GruposDeDocentes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GruposDeDocentes',
        'app.Grupos',
        'app.Docentes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GruposDeDocentes') ? [] : ['className' => GruposDeDocentesTable::class];
        $this->GruposDeDocentes = TableRegistry::getTableLocator()->get('GruposDeDocentes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GruposDeDocentes);

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
