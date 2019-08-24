<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Createevent_catsAPIRequest;
use App\Http\Requests\API\Updateevent_catsAPIRequest;
use App\Models\event_cats;
use App\Repositories\event_catsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class event_catsController
 * @package App\Http\Controllers\API
 */

class event_catsAPIController extends AppBaseController
{
    /** @var  event_catsRepository */
    private $eventCatsRepository;

    public function __construct(event_catsRepository $eventCatsRepo)
    {
        $this->eventCatsRepository = $eventCatsRepo;
    }

    /**
     * Display a listing of the event_cats.
     * GET|HEAD /eventCats
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $eventCats = $this->eventCatsRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($eventCats->toArray(), 'Event Cats retrieved successfully');
    }

    /**
     * Store a newly created event_cats in storage.
     * POST /eventCats
     *
     * @param Createevent_catsAPIRequest $request
     *
     * @return Response
     */
    public function store(Createevent_catsAPIRequest $request)
    {
        $input = $request->all();

        $eventCats = $this->eventCatsRepository->create($input);

        return $this->sendResponse($eventCats->toArray(), 'Event Cats saved successfully');
    }

    /**
     * Display the specified event_cats.
     * GET|HEAD /eventCats/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var event_cats $eventCats */
        $eventCats = $this->eventCatsRepository->find($id);

        if (empty($eventCats)) {
            return $this->sendError('Event Cats not found');
        }

        return $this->sendResponse($eventCats->toArray(), 'Event Cats retrieved successfully');
    }

    /**
     * Update the specified event_cats in storage.
     * PUT/PATCH /eventCats/{id}
     *
     * @param int $id
     * @param Updateevent_catsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Updateevent_catsAPIRequest $request)
    {
        $input = $request->all();

        /** @var event_cats $eventCats */
        $eventCats = $this->eventCatsRepository->find($id);

        if (empty($eventCats)) {
            return $this->sendError('Event Cats not found');
        }

        $eventCats = $this->eventCatsRepository->update($input, $id);

        return $this->sendResponse($eventCats->toArray(), 'event_cats updated successfully');
    }

    /**
     * Remove the specified event_cats from storage.
     * DELETE /eventCats/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var event_cats $eventCats */
        $eventCats = $this->eventCatsRepository->find($id);

        if (empty($eventCats)) {
            return $this->sendError('Event Cats not found');
        }

        $eventCats->delete();

        return $this->sendResponse($id, 'Event Cats deleted successfully');
    }
}
