<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\prod_cats;

class prod_catsApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_prod_cats()
    {
        $prodCats = factory(prod_cats::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/prod_cats', $prodCats
        );

        $this->assertApiResponse($prodCats);
    }

    /**
     * @test
     */
    public function test_read_prod_cats()
    {
        $prodCats = factory(prod_cats::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/prod_cats/'.$prodCats->id
        );

        $this->assertApiResponse($prodCats->toArray());
    }

    /**
     * @test
     */
    public function test_update_prod_cats()
    {
        $prodCats = factory(prod_cats::class)->create();
        $editedprod_cats = factory(prod_cats::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/prod_cats/'.$prodCats->id,
            $editedprod_cats
        );

        $this->assertApiResponse($editedprod_cats);
    }

    /**
     * @test
     */
    public function test_delete_prod_cats()
    {
        $prodCats = factory(prod_cats::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/prod_cats/'.$prodCats->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/prod_cats/'.$prodCats->id
        );

        $this->response->assertStatus(404);
    }
}
