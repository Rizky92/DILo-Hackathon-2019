<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtourism_destsRequest;
use App\Http\Requests\Updatetourism_destsRequest;
use App\Repositories\tourism_destsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tourism_destsController extends AppBaseController
{
    /** @var  tourism_destsRepository */
    private $tourismDestsRepository;

    public function __construct(tourism_destsRepository $tourismDestsRepo)
    {
        $this->tourismDestsRepository = $tourismDestsRepo;
    }

    /**
     * Display a listing of the tourism_dests.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tourismDests = $this->tourismDestsRepository->all();

        return view('tourism_dests.index')
            ->with('tourismDests', $tourismDests);
    }

    /**
     * Show the form for creating a new tourism_dests.
     *
     * @return Response
     */
    public function create()
    {
        return view('tourism_dests.create');
    }

    /**
     * Store a newly created tourism_dests in storage.
     *
     * @param Createtourism_destsRequest $request
     *
     * @return Response
     */
    public function store(Createtourism_destsRequest $request)
    {
        $input = $request->all();

        $tourismDests = $this->tourismDestsRepository->create($input);

        Flash::success('Tourism Dests saved successfully.');

        return redirect(route('tourismDests.index'));
    }

    /**
     * Display the specified tourism_dests.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tourismDests = $this->tourismDestsRepository->find($id);

        if (empty($tourismDests)) {
            Flash::error('Tourism Dests not found');

            return redirect(route('tourismDests.index'));
        }

        return view('tourism_dests.show')->with('tourismDests', $tourismDests);
    }

    /**
     * Show the form for editing the specified tourism_dests.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tourismDests = $this->tourismDestsRepository->find($id);

        if (empty($tourismDests)) {
            Flash::error('Tourism Dests not found');

            return redirect(route('tourismDests.index'));
        }

        return view('tourism_dests.edit')->with('tourismDests', $tourismDests);
    }

    /**
     * Update the specified tourism_dests in storage.
     *
     * @param int $id
     * @param Updatetourism_destsRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetourism_destsRequest $request)
    {
        $tourismDests = $this->tourismDestsRepository->find($id);

        if (empty($tourismDests)) {
            Flash::error('Tourism Dests not found');

            return redirect(route('tourismDests.index'));
        }

        $tourismDests = $this->tourismDestsRepository->update($request->all(), $id);

        Flash::success('Tourism Dests updated successfully.');

        return redirect(route('tourismDests.index'));
    }

    /**
     * Remove the specified tourism_dests from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tourismDests = $this->tourismDestsRepository->find($id);

        if (empty($tourismDests)) {
            Flash::error('Tourism Dests not found');

            return redirect(route('tourismDests.index'));
        }

        $this->tourismDestsRepository->delete($id);

        Flash::success('Tourism Dests deleted successfully.');

        return redirect(route('tourismDests.index'));
    }
}
