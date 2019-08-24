<?php namespace Tests\Repositories;

use App\Models\clients_users;
use App\Repositories\clients_usersRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class clients_usersRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var clients_usersRepository
     */
    protected $clientsUsersRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->clientsUsersRepo = \App::make(clients_usersRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_clients_users()
    {
        $clientsUsers = factory(clients_users::class)->make()->toArray();

        $createdclients_users = $this->clientsUsersRepo->create($clientsUsers);

        $createdclients_users = $createdclients_users->toArray();
        $this->assertArrayHasKey('id', $createdclients_users);
        $this->assertNotNull($createdclients_users['id'], 'Created clients_users must have id specified');
        $this->assertNotNull(clients_users::find($createdclients_users['id']), 'clients_users with given id must be in DB');
        $this->assertModelData($clientsUsers, $createdclients_users);
    }

    /**
     * @test read
     */
    public function test_read_clients_users()
    {
        $clientsUsers = factory(clients_users::class)->create();

        $dbclients_users = $this->clientsUsersRepo->find($clientsUsers->id);

        $dbclients_users = $dbclients_users->toArray();
        $this->assertModelData($clientsUsers->toArray(), $dbclients_users);
    }

    /**
     * @test update
     */
    public function test_update_clients_users()
    {
        $clientsUsers = factory(clients_users::class)->create();
        $fakeclients_users = factory(clients_users::class)->make()->toArray();

        $updatedclients_users = $this->clientsUsersRepo->update($fakeclients_users, $clientsUsers->id);

        $this->assertModelData($fakeclients_users, $updatedclients_users->toArray());
        $dbclients_users = $this->clientsUsersRepo->find($clientsUsers->id);
        $this->assertModelData($fakeclients_users, $dbclients_users->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_clients_users()
    {
        $clientsUsers = factory(clients_users::class)->create();

        $resp = $this->clientsUsersRepo->delete($clientsUsers->id);

        $this->assertTrue($resp);
        $this->assertNull(clients_users::find($clientsUsers->id), 'clients_users should not exist in DB');
    }
}
