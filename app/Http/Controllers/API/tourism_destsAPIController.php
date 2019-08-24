<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Createtourism_destsAPIRequest;
use App\Http\Requests\API\Updatetourism_destsAPIRequest;
use App\Models\tourism_dests;
use App\Repositories\tourism_destsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class tourism_destsController
 * @package App\Http\Controllers\API
 */

class tourism_destsAPIController extends AppBaseController
{
    /** @var  tourism_destsRepository */
    private $tourismDestsRepository;

    public function __construct(tourism_destsRepository $tourismDestsRepo)
    {
        $this->tourismDestsRepository = $tourismDestsRepo;
    }

    /**
     * Display a listing of the tourism_dests.
     * GET|HEAD /tourismDests
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $tourismDests = $this->tourismDestsRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($tourismDests->toArray(), 'Tourism Dests retrieved successfully');
    }

    /**
     * Store a newly created tourism_dests in storage.
     * POST /tourismDests
     *
     * @param Createtourism_destsAPIRequest $request
     *
     * @return Response
     */
    public function store(Createtourism_destsAPIRequest $request)
    {
        $input = $request->all();

        $tourismDests = $this->tourismDestsRepository->create($input);

        return $this->sendResponse($tourismDests->toArray(), 'Tourism Dests saved successfully');
    }

    /**
     * Display the specified tourism_dests.
     * GET|HEAD /tourismDests/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var tourism_dests $tourismDests */
        $tourismDests = $this->tourismDestsRepository->find($id);

        if (empty($tourismDests)) {
            return $this->sendError('Tourism Dests not found');
        }

        return $this->sendResponse($tourismDests->toArray(), 'Tourism Dests retrieved successfully');
    }

    /**
     * Update the specified tourism_dests in storage.
     * PUT/PATCH /tourismDests/{id}
     *
     * @param int $id
     * @param Updatetourism_destsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetourism_destsAPIRequest $request)
    {
        $input = $request->all();

        /** @var tourism_dests $tourismDests */
        $tourismDests = $this->tourismDestsRepository->find($id);

        if (empty($tourismDests)) {
            return $this->sendError('Tourism Dests not found');
        }

        $tourismDests = $this->tourismDestsRepository->update($input, $id);

        return $this->sendResponse($tourismDests->toArray(), 'tourism_dests updated successfully');
    }

    /**
     * Remove the specified tourism_dests from storage.
     * DELETE /tourismDests/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var tourism_dests $tourismDests */
        $tourismDests = $this->tourismDestsRepository->find($id);

        if (empty($tourismDests)) {
            return $this->sendError('Tourism Dests not found');
        }

        $tourismDests->delete();

        return $this->sendResponse($id, 'Tourism Dests deleted successfully');
    }
}
