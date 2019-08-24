<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Createtourism_des_catsAPIRequest;
use App\Http\Requests\API\Updatetourism_des_catsAPIRequest;
use App\Models\tourism_des_cats;
use App\Repositories\tourism_des_catsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class tourism_des_catsController
 * @package App\Http\Controllers\API
 */

class tourism_des_catsAPIController extends AppBaseController
{
    /** @var  tourism_des_catsRepository */
    private $tourismDesCatsRepository;

    public function __construct(tourism_des_catsRepository $tourismDesCatsRepo)
    {
        $this->tourismDesCatsRepository = $tourismDesCatsRepo;
    }

    /**
     * Display a listing of the tourism_des_cats.
     * GET|HEAD /tourismDesCats
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $tourismDesCats = $this->tourismDesCatsRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($tourismDesCats->toArray(), 'Tourism Des Cats retrieved successfully');
    }

    /**
     * Store a newly created tourism_des_cats in storage.
     * POST /tourismDesCats
     *
     * @param Createtourism_des_catsAPIRequest $request
     *
     * @return Response
     */
    public function store(Createtourism_des_catsAPIRequest $request)
    {
        $input = $request->all();

        $tourismDesCats = $this->tourismDesCatsRepository->create($input);

        return $this->sendResponse($tourismDesCats->toArray(), 'Tourism Des Cats saved successfully');
    }

    /**
     * Display the specified tourism_des_cats.
     * GET|HEAD /tourismDesCats/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var tourism_des_cats $tourismDesCats */
        $tourismDesCats = $this->tourismDesCatsRepository->find($id);

        if (empty($tourismDesCats)) {
            return $this->sendError('Tourism Des Cats not found');
        }

        return $this->sendResponse($tourismDesCats->toArray(), 'Tourism Des Cats retrieved successfully');
    }

    /**
     * Update the specified tourism_des_cats in storage.
     * PUT/PATCH /tourismDesCats/{id}
     *
     * @param int $id
     * @param Updatetourism_des_catsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetourism_des_catsAPIRequest $request)
    {
        $input = $request->all();

        /** @var tourism_des_cats $tourismDesCats */
        $tourismDesCats = $this->tourismDesCatsRepository->find($id);

        if (empty($tourismDesCats)) {
            return $this->sendError('Tourism Des Cats not found');
        }

        $tourismDesCats = $this->tourismDesCatsRepository->update($input, $id);

        return $this->sendResponse($tourismDesCats->toArray(), 'tourism_des_cats updated successfully');
    }

    /**
     * Remove the specified tourism_des_cats from storage.
     * DELETE /tourismDesCats/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var tourism_des_cats $tourismDesCats */
        $tourismDesCats = $this->tourismDesCatsRepository->find($id);

        if (empty($tourismDesCats)) {
            return $this->sendError('Tourism Des Cats not found');
        }

        $tourismDesCats->delete();

        return $this->sendResponse($id, 'Tourism Des Cats deleted successfully');
    }
}
