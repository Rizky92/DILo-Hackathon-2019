<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createevent_catsRequest;
use App\Http\Requests\Updateevent_catsRequest;
use App\Repositories\event_catsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class event_catsController extends AppBaseController
{
    /** @var  event_catsRepository */
    private $eventCatsRepository;

    public function __construct(event_catsRepository $eventCatsRepo)
    {
        $this->eventCatsRepository = $eventCatsRepo;
    }

    /**
     * Display a listing of the event_cats.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $eventCats = $this->eventCatsRepository->all();

        return view('event_cats.index')
            ->with('eventCats', $eventCats);
    }

    /**
     * Show the form for creating a new event_cats.
     *
     * @return Response
     */
    public function create()
    {
        return view('event_cats.create');
    }

    /**
     * Store a newly created event_cats in storage.
     *
     * @param Createevent_catsRequest $request
     *
     * @return Response
     */
    public function store(Createevent_catsRequest $request)
    {
        $input = $request->all();

        $eventCats = $this->eventCatsRepository->create($input);

        Flash::success('Event Cats saved successfully.');

        return redirect(route('eventCats.index'));
    }

    /**
     * Display the specified event_cats.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $eventCats = $this->eventCatsRepository->find($id);

        if (empty($eventCats)) {
            Flash::error('Event Cats not found');

            return redirect(route('eventCats.index'));
        }

        return view('event_cats.show')->with('eventCats', $eventCats);
    }

    /**
     * Show the form for editing the specified event_cats.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $eventCats = $this->eventCatsRepository->find($id);

        if (empty($eventCats)) {
            Flash::error('Event Cats not found');

            return redirect(route('eventCats.index'));
        }

        return view('event_cats.edit')->with('eventCats', $eventCats);
    }

    /**
     * Update the specified event_cats in storage.
     *
     * @param int $id
     * @param Updateevent_catsRequest $request
     *
     * @return Response
     */
    public function update($id, Updateevent_catsRequest $request)
    {
        $eventCats = $this->eventCatsRepository->find($id);

        if (empty($eventCats)) {
            Flash::error('Event Cats not found');

            return redirect(route('eventCats.index'));
        }

        $eventCats = $this->eventCatsRepository->update($request->all(), $id);

        Flash::success('Event Cats updated successfully.');

        return redirect(route('eventCats.index'));
    }

    /**
     * Remove the specified event_cats from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $eventCats = $this->eventCatsRepository->find($id);

        if (empty($eventCats)) {
            Flash::error('Event Cats not found');

            return redirect(route('eventCats.index'));
        }

        $this->eventCatsRepository->delete($id);

        Flash::success('Event Cats deleted successfully.');

        return redirect(route('eventCats.index'));
    }
}
