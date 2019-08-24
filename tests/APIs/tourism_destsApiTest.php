<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\tourism_dests;

class tourism_destsApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_tourism_dests()
    {
        $tourismDests = factory(tourism_dests::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/tourism_dests', $tourismDests
        );

        $this->assertApiResponse($tourismDests);
    }

    /**
     * @test
     */
    public function test_read_tourism_dests()
    {
        $tourismDests = factory(tourism_dests::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/tourism_dests/'.$tourismDests->id
        );

        $this->assertApiResponse($tourismDests->toArray());
    }

    /**
     * @test
     */
    public function test_update_tourism_dests()
    {
        $tourismDests = factory(tourism_dests::class)->create();
        $editedtourism_dests = factory(tourism_dests::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/tourism_dests/'.$tourismDests->id,
            $editedtourism_dests
        );

        $this->assertApiResponse($editedtourism_dests);
    }

    /**
     * @test
     */
    public function test_delete_tourism_dests()
    {
        $tourismDests = factory(tourism_dests::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/tourism_dests/'.$tourismDests->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/tourism_dests/'.$tourismDests->id
        );

        $this->response->assertStatus(404);
    }
}
