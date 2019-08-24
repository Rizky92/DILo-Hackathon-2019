<?php namespace Tests\Repositories;

use App\Models\tourism_des_cats;
use App\Repositories\tourism_des_catsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class tourism_des_catsRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var tourism_des_catsRepository
     */
    protected $tourismDesCatsRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->tourismDesCatsRepo = \App::make(tourism_des_catsRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_tourism_des_cats()
    {
        $tourismDesCats = factory(tourism_des_cats::class)->make()->toArray();

        $createdtourism_des_cats = $this->tourismDesCatsRepo->create($tourismDesCats);

        $createdtourism_des_cats = $createdtourism_des_cats->toArray();
        $this->assertArrayHasKey('id', $createdtourism_des_cats);
        $this->assertNotNull($createdtourism_des_cats['id'], 'Created tourism_des_cats must have id specified');
        $this->assertNotNull(tourism_des_cats::find($createdtourism_des_cats['id']), 'tourism_des_cats with given id must be in DB');
        $this->assertModelData($tourismDesCats, $createdtourism_des_cats);
    }

    /**
     * @test read
     */
    public function test_read_tourism_des_cats()
    {
        $tourismDesCats = factory(tourism_des_cats::class)->create();

        $dbtourism_des_cats = $this->tourismDesCatsRepo->find($tourismDesCats->id);

        $dbtourism_des_cats = $dbtourism_des_cats->toArray();
        $this->assertModelData($tourismDesCats->toArray(), $dbtourism_des_cats);
    }

    /**
     * @test update
     */
    public function test_update_tourism_des_cats()
    {
        $tourismDesCats = factory(tourism_des_cats::class)->create();
        $faketourism_des_cats = factory(tourism_des_cats::class)->make()->toArray();

        $updatedtourism_des_cats = $this->tourismDesCatsRepo->update($faketourism_des_cats, $tourismDesCats->id);

        $this->assertModelData($faketourism_des_cats, $updatedtourism_des_cats->toArray());
        $dbtourism_des_cats = $this->tourismDesCatsRepo->find($tourismDesCats->id);
        $this->assertModelData($faketourism_des_cats, $dbtourism_des_cats->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_tourism_des_cats()
    {
        $tourismDesCats = factory(tourism_des_cats::class)->create();

        $resp = $this->tourismDesCatsRepo->delete($tourismDesCats->id);

        $this->assertTrue($resp);
        $this->assertNull(tourism_des_cats::find($tourismDesCats->id), 'tourism_des_cats should not exist in DB');
    }
}
