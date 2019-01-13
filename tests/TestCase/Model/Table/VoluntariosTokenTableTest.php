<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VoluntariosTokenTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VoluntariosTokenTable Test Case
 */
class VoluntariosTokenTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VoluntariosTokenTable
     */
    public $VoluntariosToken;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.VoluntariosToken'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('VoluntariosToken') ? [] : ['className' => VoluntariosTokenTable::class];
        $this->VoluntariosToken = TableRegistry::getTableLocator()->get('VoluntariosToken', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VoluntariosToken);

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
