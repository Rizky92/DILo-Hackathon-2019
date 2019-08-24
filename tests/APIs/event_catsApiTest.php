<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\event_cats;

class event_catsApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_event_cats()
    {
        $eventCats = factory(event_cats::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/event_cats', $eventCats
        );

        $this->assertApiResponse($eventCats);
    }

    /**
     * @test
     */
    public function test_read_event_cats()
    {
        $eventCats = factory(event_cats::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/event_cats/'.$eventCats->id
        );

        $this->assertApiResponse($eventCats->toArray());
    }

    /**
     * @test
     */
    public function test_update_event_cats()
    {
        $eventCats = factory(event_cats::class)->create();
        $editedevent_cats = factory(event_cats::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/event_cats/'.$eventCats->id,
            $editedevent_cats
        );

        $this->assertApiResponse($editedevent_cats);
    }

    /**
     * @test
     */
    public function test_delete_event_cats()
    {
        $eventCats = factory(event_cats::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/event_cats/'.$eventCats->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/event_cats/'.$eventCats->id
        );

        $this->response->assertStatus(404);
    }
}
