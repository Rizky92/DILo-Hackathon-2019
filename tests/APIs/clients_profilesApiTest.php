<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\clients_profiles;

class clients_profilesApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_clients_profiles()
    {
        $clientsProfiles = factory(clients_profiles::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/clients_profiles', $clientsProfiles
        );

        $this->assertApiResponse($clientsProfiles);
    }

    /**
     * @test
     */
    public function test_read_clients_profiles()
    {
        $clientsProfiles = factory(clients_profiles::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/clients_profiles/'.$clientsProfiles->id
        );

        $this->assertApiResponse($clientsProfiles->toArray());
    }

    /**
     * @test
     */
    public function test_update_clients_profiles()
    {
        $clientsProfiles = factory(clients_profiles::class)->create();
        $editedclients_profiles = factory(clients_profiles::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/clients_profiles/'.$clientsProfiles->id,
            $editedclients_profiles
        );

        $this->assertApiResponse($editedclients_profiles);
    }

    /**
     * @test
     */
    public function test_delete_clients_profiles()
    {
        $clientsProfiles = factory(clients_profiles::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/clients_profiles/'.$clientsProfiles->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/clients_profiles/'.$clientsProfiles->id
        );

        $this->response->assertStatus(404);
    }
}
