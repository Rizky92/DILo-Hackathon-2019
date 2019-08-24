<?php namespace Tests\Repositories;

use App\Models\clients_scores;
use App\Repositories\clients_scoresRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class clients_scoresRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var clients_scoresRepository
     */
    protected $clientsScoresRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->clientsScoresRepo = \App::make(clients_scoresRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_clients_scores()
    {
        $clientsScores = factory(clients_scores::class)->make()->toArray();

        $createdclients_scores = $this->clientsScoresRepo->create($clientsScores);

        $createdclients_scores = $createdclients_scores->toArray();
        $this->assertArrayHasKey('id', $createdclients_scores);
        $this->assertNotNull($createdclients_scores['id'], 'Created clients_scores must have id specified');
        $this->assertNotNull(clients_scores::find($createdclients_scores['id']), 'clients_scores with given id must be in DB');
        $this->assertModelData($clientsScores, $createdclients_scores);
    }

    /**
     * @test read
     */
    public function test_read_clients_scores()
    {
        $clientsScores = factory(clients_scores::class)->create();

        $dbclients_scores = $this->clientsScoresRepo->find($clientsScores->id);

        $dbclients_scores = $dbclients_scores->toArray();
        $this->assertModelData($clientsScores->toArray(), $dbclients_scores);
    }

    /**
     * @test update
     */
    public function test_update_clients_scores()
    {
        $clientsScores = factory(clients_scores::class)->create();
        $fakeclients_scores = factory(clients_scores::class)->make()->toArray();

        $updatedclients_scores = $this->clientsScoresRepo->update($fakeclients_scores, $clientsScores->id);

        $this->assertModelData($fakeclients_scores, $updatedclients_scores->toArray());
        $dbclients_scores = $this->clientsScoresRepo->find($clientsScores->id);
        $this->assertModelData($fakeclients_scores, $dbclients_scores->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_clients_scores()
    {
        $clientsScores = factory(clients_scores::class)->create();

        $resp = $this->clientsScoresRepo->delete($clientsScores->id);

        $this->assertTrue($resp);
        $this->assertNull(clients_scores::find($clientsScores->id), 'clients_scores should not exist in DB');
    }
}
