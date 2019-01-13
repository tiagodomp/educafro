<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotificacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotificacoesTable Test Case
 */
class NotificacoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NotificacoesTable
     */
    public $Notificacoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Notificacoes',
        'app.User'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Notificacoes') ? [] : ['className' => NotificacoesTable::class];
        $this->Notificacoes = TableRegistry::getTableLocator()->get('Notificacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Notificacoes);

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
