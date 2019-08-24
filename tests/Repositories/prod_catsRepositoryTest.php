<?php namespace Tests\Repositories;

use App\Models\prod_cats;
use App\Repositories\prod_catsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class prod_catsRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var prod_catsRepository
     */
    protected $prodCatsRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->prodCatsRepo = \App::make(prod_catsRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_prod_cats()
    {
        $prodCats = factory(prod_cats::class)->make()->toArray();

        $createdprod_cats = $this->prodCatsRepo->create($prodCats);

        $createdprod_cats = $createdprod_cats->toArray();
        $this->assertArrayHasKey('id', $createdprod_cats);
        $this->assertNotNull($createdprod_cats['id'], 'Created prod_cats must have id specified');
        $this->assertNotNull(prod_cats::find($createdprod_cats['id']), 'prod_cats with given id must be in DB');
        $this->assertModelData($prodCats, $createdprod_cats);
    }

    /**
     * @test read
     */
    public function test_read_prod_cats()
    {
        $prodCats = factory(prod_cats::class)->create();

        $dbprod_cats = $this->prodCatsRepo->find($prodCats->id);

        $dbprod_cats = $dbprod_cats->toArray();
        $this->assertModelData($prodCats->toArray(), $dbprod_cats);
    }

    /**
     * @test update
     */
    public function test_update_prod_cats()
    {
        $prodCats = factory(prod_cats::class)->create();
        $fakeprod_cats = factory(prod_cats::class)->make()->toArray();

        $updatedprod_cats = $this->prodCatsRepo->update($fakeprod_cats, $prodCats->id);

        $this->assertModelData($fakeprod_cats, $updatedprod_cats->toArray());
        $dbprod_cats = $this->prodCatsRepo->find($prodCats->id);
        $this->assertModelData($fakeprod_cats, $dbprod_cats->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_prod_cats()
    {
        $prodCats = factory(prod_cats::class)->create();

        $resp = $this->prodCatsRepo->delete($prodCats->id);

        $this->assertTrue($resp);
        $this->assertNull(prod_cats::find($prodCats->id), 'prod_cats should not exist in DB');
    }
}
