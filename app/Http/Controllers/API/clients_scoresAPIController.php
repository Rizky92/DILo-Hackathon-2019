<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Createclients_scoresAPIRequest;
use App\Http\Requests\API\Updateclients_scoresAPIRequest;
use App\Models\clients_scores;
use App\Repositories\clients_scoresRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class clients_scoresController
 * @package App\Http\Controllers\API
 */

class clients_scoresAPIController extends AppBaseController
{
    /** @var  clients_scoresRepository */
    private $clientsScoresRepository;

    public function __construct(clients_scoresRepository $clientsScoresRepo)
    {
        $this->clientsScoresRepository = $clientsScoresRepo;
    }

    /**
     * Display a listing of the clients_scores.
     * GET|HEAD /clientsScores
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $clientsScores = $this->clientsScoresRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($clientsScores->toArray(), 'Clients Scores retrieved successfully');
    }

    /**
     * Store a newly created clients_scores in storage.
     * POST /clientsScores
     *
     * @param Createclients_scoresAPIRequest $request
     *
     * @return Response
     */
    public function store(Createclients_scoresAPIRequest $request)
    {
        $input = $request->all();

        $clientsScores = $this->clientsScoresRepository->create($input);

        return $this->sendResponse($clientsScores->toArray(), 'Clients Scores saved successfully');
    }

    /**
     * Display the specified clients_scores.
     * GET|HEAD /clientsScores/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var clients_scores $clientsScores */
        $clientsScores = $this->clientsScoresRepository->find($id);

        if (empty($clientsScores)) {
            return $this->sendError('Clients Scores not found');
        }

        return $this->sendResponse($clientsScores->toArray(), 'Clients Scores retrieved successfully');
    }

    /**
     * Update the specified clients_scores in storage.
     * PUT/PATCH /clientsScores/{id}
     *
     * @param int $id
     * @param Updateclients_scoresAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Updateclients_scoresAPIRequest $request)
    {
        $input = $request->all();

        /** @var clients_scores $clientsScores */
        $clientsScores = $this->clientsScoresRepository->find($id);

        if (empty($clientsScores)) {
            return $this->sendError('Clients Scores not found');
        }

        $clientsScores = $this->clientsScoresRepository->update($input, $id);

        return $this->sendResponse($clientsScores->toArray(), 'clients_scores updated successfully');
    }

    /**
     * Remove the specified clients_scores from storage.
     * DELETE /clientsScores/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var clients_scores $clientsScores */
        $clientsScores = $this->clientsScoresRepository->find($id);

        if (empty($clientsScores)) {
            return $this->sendError('Clients Scores not found');
        }

        $clientsScores->delete();

        return $this->sendResponse($id, 'Clients Scores deleted successfully');
    }
}
