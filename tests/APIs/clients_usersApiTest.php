<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\clients_users;

class clients_usersApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_clients_users()
    {
        $clientsUsers = factory(clients_users::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/clients_users', $clientsUsers
        );

        $this->assertApiResponse($clientsUsers);
    }

    /**
     * @test
     */
    public function test_read_clients_users()
    {
        $clientsUsers = factory(clients_users::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/clients_users/'.$clientsUsers->id
        );

        $this->assertApiResponse($clientsUsers->toArray());
    }

    /**
     * @test
     */
    public function test_update_clients_users()
    {
        $clientsUsers = factory(clients_users::class)->create();
        $editedclients_users = factory(clients_users::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/clients_users/'.$clientsUsers->id,
            $editedclients_users
        );

        $this->assertApiResponse($editedclients_users);
    }

    /**
     * @test
     */
    public function test_delete_clients_users()
    {
        $clientsUsers = factory(clients_users::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/clients_users/'.$clientsUsers->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/clients_users/'.$clientsUsers->id
        );

        $this->response->assertStatus(404);
    }
}
