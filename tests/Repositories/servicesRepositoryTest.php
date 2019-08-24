<?php namespace Tests\Repositories;

use App\Models\services;
use App\Repositories\servicesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class servicesRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var servicesRepository
     */
    protected $servicesRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->servicesRepo = \App::make(servicesRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_services()
    {
        $services = factory(services::class)->make()->toArray();

        $createdservices = $this->servicesRepo->create($services);

        $createdservices = $createdservices->toArray();
        $this->assertArrayHasKey('id', $createdservices);
        $this->assertNotNull($createdservices['id'], 'Created services must have id specified');
        $this->assertNotNull(services::find($createdservices['id']), 'services with given id must be in DB');
        $this->assertModelData($services, $createdservices);
    }

    /**
     * @test read
     */
    public function test_read_services()
    {
        $services = factory(services::class)->create();

        $dbservices = $this->servicesRepo->find($services->id);

        $dbservices = $dbservices->toArray();
        $this->assertModelData($services->toArray(), $dbservices);
    }

    /**
     * @test update
     */
    public function test_update_services()
    {
        $services = factory(services::class)->create();
        $fakeservices = factory(services::class)->make()->toArray();

        $updatedservices = $this->servicesRepo->update($fakeservices, $services->id);

        $this->assertModelData($fakeservices, $updatedservices->toArray());
        $dbservices = $this->servicesRepo->find($services->id);
        $this->assertModelData($fakeservices, $dbservices->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_services()
    {
        $services = factory(services::class)->create();

        $resp = $this->servicesRepo->delete($services->id);

        $this->assertTrue($resp);
        $this->assertNull(services::find($services->id), 'services should not exist in DB');
    }
}
