<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatereportsAPIRequest;
use App\Http\Requests\API\UpdatereportsAPIRequest;
use App\Models\reports;
use App\Repositories\reportsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class reportsController
 * @package App\Http\Controllers\API
 */

class reportsAPIController extends AppBaseController
{
    /** @var  reportsRepository */
    private $reportsRepository;

    public function __construct(reportsRepository $reportsRepo)
    {
        $this->reportsRepository = $reportsRepo;
    }

    /**
     * Display a listing of the reports.
     * GET|HEAD /reports
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $reports = $this->reportsRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($reports->toArray(), 'Reports retrieved successfully');
    }

    /**
     * Store a newly created reports in storage.
     * POST /reports
     *
     * @param CreatereportsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatereportsAPIRequest $request)
    {
        $input = $request->all();

        $reports = $this->reportsRepository->create($input);

        return $this->sendResponse($reports->toArray(), 'Reports saved successfully');
    }

    /**
     * Display the specified reports.
     * GET|HEAD /reports/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var reports $reports */
        $reports = $this->reportsRepository->find($id);

        if (empty($reports)) {
            return $this->sendError('Reports not found');
        }

        return $this->sendResponse($reports->toArray(), 'Reports retrieved successfully');
    }

    /**
     * Update the specified reports in storage.
     * PUT/PATCH /reports/{id}
     *
     * @param int $id
     * @param UpdatereportsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatereportsAPIRequest $request)
    {
        $input = $request->all();

        /** @var reports $reports */
        $reports = $this->reportsRepository->find($id);

        if (empty($reports)) {
            return $this->sendError('Reports not found');
        }

        $reports = $this->reportsRepository->update($input, $id);

        return $this->sendResponse($reports->toArray(), 'reports updated successfully');
    }

    /**
     * Remove the specified reports from storage.
     * DELETE /reports/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var reports $reports */
        $reports = $this->reportsRepository->find($id);

        if (empty($reports)) {
            return $this->sendError('Reports not found');
        }

        $reports->delete();

        return $this->sendResponse($id, 'Reports deleted successfully');
    }
}
