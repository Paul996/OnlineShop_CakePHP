<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsUsersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsUsersTable Test Case
 */
class ProductsUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsUsersTable
     */
    protected $ProductsUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ProductsUsers',
        'app.Users',
        'app.Products',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ProductsUsers') ? [] : ['className' => ProductsUsersTable::class];
        $this->ProductsUsers = $this->getTableLocator()->get('ProductsUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ProductsUsers);

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
