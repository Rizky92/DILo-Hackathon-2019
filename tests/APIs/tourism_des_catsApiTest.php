<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\tourism_des_cats;

class tourism_des_catsApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_tourism_des_cats()
    {
        $tourismDesCats = factory(tourism_des_cats::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/tourism_des_cats', $tourismDesCats
        );

        $this->assertApiResponse($tourismDesCats);
    }

    /**
     * @test
     */
    public function test_read_tourism_des_cats()
    {
        $tourismDesCats = factory(tourism_des_cats::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/tourism_des_cats/'.$tourismDesCats->id
        );

        $this->assertApiResponse($tourismDesCats->toArray());
    }

    /**
     * @test
     */
    public function test_update_tourism_des_cats()
    {
        $tourismDesCats = factory(tourism_des_cats::class)->create();
        $editedtourism_des_cats = factory(tourism_des_cats::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/tourism_des_cats/'.$tourismDesCats->id,
            $editedtourism_des_cats
        );

        $this->assertApiResponse($editedtourism_des_cats);
    }

    /**
     * @test
     */
    public function test_delete_tourism_des_cats()
    {
        $tourismDesCats = factory(tourism_des_cats::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/tourism_des_cats/'.$tourismDesCats->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/tourism_des_cats/'.$tourismDesCats->id
        );

        $this->response->assertStatus(404);
    }
}
