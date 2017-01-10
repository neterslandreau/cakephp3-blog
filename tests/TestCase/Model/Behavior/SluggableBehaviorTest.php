<?php
namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\SluggableBehavior;
use Cake\TestSuite\TestCase;
use Cake\ORM\TableRegistry;

/**
 * App\Model\Behavior\SluggableBehavior Test Case
 */
class SluggableBehaviorTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Behavior\SluggableBehavior
     */
    public $SluggableBehavior;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $table = TableRegistry::get('Articles');
//        debug($table);
        $this->SluggableBehavior = new SluggableBehavior($table);
//        debug($this->SluggableBehavior);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SluggableBehavior);

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
     * Test slug method
     *
     * @return void
     */
    public function testSlug()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test beforeSave method
     *
     * @return void
     */
    public function testBeforeSave()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
