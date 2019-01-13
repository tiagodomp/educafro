<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GruposSecoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GruposSecoesTable Test Case
 */
class GruposSecoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GruposSecoesTable
     */
    public $GruposSecoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GruposSecoes',
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
        $config = TableRegistry::getTableLocator()->exists('GruposSecoes') ? [] : ['className' => GruposSecoesTable::class];
        $this->GruposSecoes = TableRegistry::getTableLocator()->get('GruposSecoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GruposSecoes);

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
