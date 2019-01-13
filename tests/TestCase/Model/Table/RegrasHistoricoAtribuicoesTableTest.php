<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegrasHistoricoAtribuicoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegrasHistoricoAtribuicoesTable Test Case
 */
class RegrasHistoricoAtribuicoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RegrasHistoricoAtribuicoesTable
     */
    public $RegrasHistoricoAtribuicoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.RegrasHistoricoAtribuicoes',
        'app.UserAtribuicoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RegrasHistoricoAtribuicoes') ? [] : ['className' => RegrasHistoricoAtribuicoesTable::class];
        $this->RegrasHistoricoAtribuicoes = TableRegistry::getTableLocator()->get('RegrasHistoricoAtribuicoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RegrasHistoricoAtribuicoes);

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
