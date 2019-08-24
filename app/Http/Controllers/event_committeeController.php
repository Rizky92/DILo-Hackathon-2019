<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createevent_committeeRequest;
use App\Http\Requests\Updateevent_committeeRequest;
use App\Repositories\event_committeeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class event_committeeController extends AppBaseController
{
    /** @var  event_committeeRepository */
    private $eventCommitteeRepository;

    public function __construct(event_committeeRepository $eventCommitteeRepo)
    {
        $this->eventCommitteeRepository = $eventCommitteeRepo;
    }

    /**
     * Display a listing of the event_committee.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $eventCommittees = $this->eventCommitteeRepository->all();

        return view('event_committees.index')
            ->with('eventCommittees', $eventCommittees);
    }

    /**
     * Show the form for creating a new event_committee.
     *
     * @return Response
     */
    public function create()
    {
        return view('event_committees.create');
    }

    /**
     * Store a newly created event_committee in storage.
     *
     * @param Createevent_committeeRequest $request
     *
     * @return Response
     */
    public function store(Createevent_committeeRequest $request)
    {
        $input = $request->all();

        $eventCommittee = $this->eventCommitteeRepository->create($input);

        Flash::success('Event Committee saved successfully.');

        return redirect(route('eventCommittees.index'));
    }

    /**
     * Display the specified event_committee.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $eventCommittee = $this->eventCommitteeRepository->find($id);

        if (empty($eventCommittee)) {
            Flash::error('Event Committee not found');

            return redirect(route('eventCommittees.index'));
        }

        return view('event_committees.show')->with('eventCommittee', $eventCommittee);
    }

    /**
     * Show the form for editing the specified event_committee.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $eventCommittee = $this->eventCommitteeRepository->find($id);

        if (empty($eventCommittee)) {
            Flash::error('Event Committee not found');

            return redirect(route('eventCommittees.index'));
        }

        return view('event_committees.edit')->with('eventCommittee', $eventCommittee);
    }

    /**
     * Update the specified event_committee in storage.
     *
     * @param int $id
     * @param Updateevent_committeeRequest $request
     *
     * @return Response
     */
    public function update($id, Updateevent_committeeRequest $request)
    {
        $eventCommittee = $this->eventCommitteeRepository->find($id);

        if (empty($eventCommittee)) {
            Flash::error('Event Committee not found');

            return redirect(route('eventCommittees.index'));
        }

        $eventCommittee = $this->eventCommitteeRepository->update($request->all(), $id);

        Flash::success('Event Committee updated successfully.');

        return redirect(route('eventCommittees.index'));
    }

    /**
     * Remove the specified event_committee from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $eventCommittee = $this->eventCommitteeRepository->find($id);

        if (empty($eventCommittee)) {
            Flash::error('Event Committee not found');

            return redirect(route('eventCommittees.index'));
        }

        $this->eventCommitteeRepository->delete($id);

        Flash::success('Event Committee deleted successfully.');

        return redirect(route('eventCommittees.index'));
    }
}
