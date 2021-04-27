<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TweetsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TweetsTable Test Case
 */
class TweetsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TweetsTable
     */
    protected $Tweets;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Tweets',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tweets') ? [] : ['className' => TweetsTable::class];
        $this->Tweets = $this->getTableLocator()->get('Tweets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Tweets);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
