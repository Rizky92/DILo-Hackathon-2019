<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\services;

class servicesApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_services()
    {
        $services = factory(services::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/services', $services
        );

        $this->assertApiResponse($services);
    }

    /**
     * @test
     */
    public function test_read_services()
    {
        $services = factory(services::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/services/'.$services->id
        );

        $this->assertApiResponse($services->toArray());
    }

    /**
     * @test
     */
    public function test_update_services()
    {
        $services = factory(services::class)->create();
        $editedservices = factory(services::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/services/'.$services->id,
            $editedservices
        );

        $this->assertApiResponse($editedservices);
    }

    /**
     * @test
     */
    public function test_delete_services()
    {
        $services = factory(services::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/services/'.$services->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/services/'.$services->id
        );

        $this->response->assertStatus(404);
    }
}
