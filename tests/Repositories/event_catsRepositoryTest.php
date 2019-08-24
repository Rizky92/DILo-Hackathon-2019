<?php namespace Tests\Repositories;

use App\Models\event_cats;
use App\Repositories\event_catsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class event_catsRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var event_catsRepository
     */
    protected $eventCatsRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->eventCatsRepo = \App::make(event_catsRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_event_cats()
    {
        $eventCats = factory(event_cats::class)->make()->toArray();

        $createdevent_cats = $this->eventCatsRepo->create($eventCats);

        $createdevent_cats = $createdevent_cats->toArray();
        $this->assertArrayHasKey('id', $createdevent_cats);
        $this->assertNotNull($createdevent_cats['id'], 'Created event_cats must have id specified');
        $this->assertNotNull(event_cats::find($createdevent_cats['id']), 'event_cats with given id must be in DB');
        $this->assertModelData($eventCats, $createdevent_cats);
    }

    /**
     * @test read
     */
    public function test_read_event_cats()
    {
        $eventCats = factory(event_cats::class)->create();

        $dbevent_cats = $this->eventCatsRepo->find($eventCats->id);

        $dbevent_cats = $dbevent_cats->toArray();
        $this->assertModelData($eventCats->toArray(), $dbevent_cats);
    }

    /**
     * @test update
     */
    public function test_update_event_cats()
    {
        $eventCats = factory(event_cats::class)->create();
        $fakeevent_cats = factory(event_cats::class)->make()->toArray();

        $updatedevent_cats = $this->eventCatsRepo->update($fakeevent_cats, $eventCats->id);

        $this->assertModelData($fakeevent_cats, $updatedevent_cats->toArray());
        $dbevent_cats = $this->eventCatsRepo->find($eventCats->id);
        $this->assertModelData($fakeevent_cats, $dbevent_cats->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_event_cats()
    {
        $eventCats = factory(event_cats::class)->create();

        $resp = $this->eventCatsRepo->delete($eventCats->id);

        $this->assertTrue($resp);
        $this->assertNull(event_cats::find($eventCats->id), 'event_cats should not exist in DB');
    }
}
