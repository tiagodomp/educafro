<?php
namespace App\Test\TestCase\Form;

use App\Form\TesteForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\TesteForm Test Case
 */
class TesteFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\TesteForm
     */
    public $Teste;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Teste = new TesteForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Teste);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
