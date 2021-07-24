<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AddressesUsersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AddressesUsersTable Test Case
 */
class AddressesUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AddressesUsersTable
     */
    protected $AddressesUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.AddressesUsers',
        'app.Users',
        'app.Addresses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AddressesUsers') ? [] : ['className' => AddressesUsersTable::class];
        $this->AddressesUsers = $this->getTableLocator()->get('AddressesUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->AddressesUsers);

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
