<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerfisUploadTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerfisUploadTable Test Case
 */
class PerfisUploadTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PerfisUploadTable
     */
    public $PerfisUpload;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PerfisUpload',
        'app.Perfis'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PerfisUpload') ? [] : ['className' => PerfisUploadTable::class];
        $this->PerfisUpload = TableRegistry::getTableLocator()->get('PerfisUpload', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PerfisUpload);

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
