<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CheckmesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CheckmesTable Test Case
 */
class CheckmesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CheckmesTable
     */
    public $Checkmes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Checkmes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Checkmes') ? [] : ['className' => CheckmesTable::class];
        $this->Checkmes = TableRegistry::getTableLocator()->get('Checkmes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Checkmes);

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
}
