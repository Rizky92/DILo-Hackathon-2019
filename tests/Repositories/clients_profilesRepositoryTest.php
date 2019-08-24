<?php namespace Tests\Repositories;

use App\Models\clients_profiles;
use App\Repositories\clients_profilesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class clients_profilesRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var clients_profilesRepository
     */
    protected $clientsProfilesRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->clientsProfilesRepo = \App::make(clients_profilesRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_clients_profiles()
    {
        $clientsProfiles = factory(clients_profiles::class)->make()->toArray();

        $createdclients_profiles = $this->clientsProfilesRepo->create($clientsProfiles);

        $createdclients_profiles = $createdclients_profiles->toArray();
        $this->assertArrayHasKey('id', $createdclients_profiles);
        $this->assertNotNull($createdclients_profiles['id'], 'Created clients_profiles must have id specified');
        $this->assertNotNull(clients_profiles::find($createdclients_profiles['id']), 'clients_profiles with given id must be in DB');
        $this->assertModelData($clientsProfiles, $createdclients_profiles);
    }

    /**
     * @test read
     */
    public function test_read_clients_profiles()
    {
        $clientsProfiles = factory(clients_profiles::class)->create();

        $dbclients_profiles = $this->clientsProfilesRepo->find($clientsProfiles->id);

        $dbclients_profiles = $dbclients_profiles->toArray();
        $this->assertModelData($clientsProfiles->toArray(), $dbclients_profiles);
    }

    /**
     * @test update
     */
    public function test_update_clients_profiles()
    {
        $clientsProfiles = factory(clients_profiles::class)->create();
        $fakeclients_profiles = factory(clients_profiles::class)->make()->toArray();

        $updatedclients_profiles = $this->clientsProfilesRepo->update($fakeclients_profiles, $clientsProfiles->id);

        $this->assertModelData($fakeclients_profiles, $updatedclients_profiles->toArray());
        $dbclients_profiles = $this->clientsProfilesRepo->find($clientsProfiles->id);
        $this->assertModelData($fakeclients_profiles, $dbclients_profiles->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_clients_profiles()
    {
        $clientsProfiles = factory(clients_profiles::class)->create();

        $resp = $this->clientsProfilesRepo->delete($clientsProfiles->id);

        $this->assertTrue($resp);
        $this->assertNull(clients_profiles::find($clientsProfiles->id), 'clients_profiles should not exist in DB');
    }
}
