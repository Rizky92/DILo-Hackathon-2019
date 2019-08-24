<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\clients_scores;

class clients_scoresApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_clients_scores()
    {
        $clientsScores = factory(clients_scores::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/clients_scores', $clientsScores
        );

        $this->assertApiResponse($clientsScores);
    }

    /**
     * @test
     */
    public function test_read_clients_scores()
    {
        $clientsScores = factory(clients_scores::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/clients_scores/'.$clientsScores->id
        );

        $this->assertApiResponse($clientsScores->toArray());
    }

    /**
     * @test
     */
    public function test_update_clients_scores()
    {
        $clientsScores = factory(clients_scores::class)->create();
        $editedclients_scores = factory(clients_scores::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/clients_scores/'.$clientsScores->id,
            $editedclients_scores
        );

        $this->assertApiResponse($editedclients_scores);
    }

    /**
     * @test
     */
    public function test_delete_clients_scores()
    {
        $clientsScores = factory(clients_scores::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/clients_scores/'.$clientsScores->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/clients_scores/'.$clientsScores->id
        );

        $this->response->assertStatus(404);
    }
}
