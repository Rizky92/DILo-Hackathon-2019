<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Createprod_catsAPIRequest;
use App\Http\Requests\API\Updateprod_catsAPIRequest;
use App\Models\prod_cats;
use App\Repositories\prod_catsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class prod_catsController
 * @package App\Http\Controllers\API
 */

class prod_catsAPIController extends AppBaseController
{
    /** @var  prod_catsRepository */
    private $prodCatsRepository;

    public function __construct(prod_catsRepository $prodCatsRepo)
    {
        $this->prodCatsRepository = $prodCatsRepo;
    }

    /**
     * Display a listing of the prod_cats.
     * GET|HEAD /prodCats
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $prodCats = $this->prodCatsRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($prodCats->toArray(), 'Prod Cats retrieved successfully');
    }

    /**
     * Store a newly created prod_cats in storage.
     * POST /prodCats
     *
     * @param Createprod_catsAPIRequest $request
     *
     * @return Response
     */
    public function store(Createprod_catsAPIRequest $request)
    {
        $input = $request->all();

        $prodCats = $this->prodCatsRepository->create($input);

        return $this->sendResponse($prodCats->toArray(), 'Prod Cats saved successfully');
    }

    /**
     * Display the specified prod_cats.
     * GET|HEAD /prodCats/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var prod_cats $prodCats */
        $prodCats = $this->prodCatsRepository->find($id);

        if (empty($prodCats)) {
            return $this->sendError('Prod Cats not found');
        }

        return $this->sendResponse($prodCats->toArray(), 'Prod Cats retrieved successfully');
    }

    /**
     * Update the specified prod_cats in storage.
     * PUT/PATCH /prodCats/{id}
     *
     * @param int $id
     * @param Updateprod_catsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Updateprod_catsAPIRequest $request)
    {
        $input = $request->all();

        /** @var prod_cats $prodCats */
        $prodCats = $this->prodCatsRepository->find($id);

        if (empty($prodCats)) {
            return $this->sendError('Prod Cats not found');
        }

        $prodCats = $this->prodCatsRepository->update($input, $id);

        return $this->sendResponse($prodCats->toArray(), 'prod_cats updated successfully');
    }

    /**
     * Remove the specified prod_cats from storage.
     * DELETE /prodCats/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var prod_cats $prodCats */
        $prodCats = $this->prodCatsRepository->find($id);

        if (empty($prodCats)) {
            return $this->sendError('Prod Cats not found');
        }

        $prodCats->delete();

        return $this->sendResponse($id, 'Prod Cats deleted successfully');
    }
}
