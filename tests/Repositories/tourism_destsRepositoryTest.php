<?php namespace Tests\Repositories;

use App\Models\tourism_dests;
use App\Repositories\tourism_destsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class tourism_destsRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var tourism_destsRepository
     */
    protected $tourismDestsRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->tourismDestsRepo = \App::make(tourism_destsRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_tourism_dests()
    {
        $tourismDests = factory(tourism_dests::class)->make()->toArray();

        $createdtourism_dests = $this->tourismDestsRepo->create($tourismDests);

        $createdtourism_dests = $createdtourism_dests->toArray();
        $this->assertArrayHasKey('id', $createdtourism_dests);
        $this->assertNotNull($createdtourism_dests['id'], 'Created tourism_dests must have id specified');
        $this->assertNotNull(tourism_dests::find($createdtourism_dests['id']), 'tourism_dests with given id must be in DB');
        $this->assertModelData($tourismDests, $createdtourism_dests);
    }

    /**
     * @test read
     */
    public function test_read_tourism_dests()
    {
        $tourismDests = factory(tourism_dests::class)->create();

        $dbtourism_dests = $this->tourismDestsRepo->find($tourismDests->id);

        $dbtourism_dests = $dbtourism_dests->toArray();
        $this->assertModelData($tourismDests->toArray(), $dbtourism_dests);
    }

    /**
     * @test update
     */
    public function test_update_tourism_dests()
    {
        $tourismDests = factory(tourism_dests::class)->create();
        $faketourism_dests = factory(tourism_dests::class)->make()->toArray();

        $updatedtourism_dests = $this->tourismDestsRepo->update($faketourism_dests, $tourismDests->id);

        $this->assertModelData($faketourism_dests, $updatedtourism_dests->toArray());
        $dbtourism_dests = $this->tourismDestsRepo->find($tourismDests->id);
        $this->assertModelData($faketourism_dests, $dbtourism_dests->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_tourism_dests()
    {
        $tourismDests = factory(tourism_dests::class)->create();

        $resp = $this->tourismDestsRepo->delete($tourismDests->id);

        $this->assertTrue($resp);
        $this->assertNull(tourism_dests::find($tourismDests->id), 'tourism_dests should not exist in DB');
    }
}
