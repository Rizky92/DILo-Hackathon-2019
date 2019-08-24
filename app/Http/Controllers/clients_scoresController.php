<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createclients_scoresRequest;
use App\Http\Requests\Updateclients_scoresRequest;
use App\Repositories\clients_scoresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class clients_scoresController extends AppBaseController
{
    /** @var  clients_scoresRepository */
    private $clientsScoresRepository;

    public function __construct(clients_scoresRepository $clientsScoresRepo)
    {
        $this->clientsScoresRepository = $clientsScoresRepo;
    }

    /**
     * Display a listing of the clients_scores.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $clientsScores = $this->clientsScoresRepository->all();

        return view('clients_scores.index')
            ->with('clientsScores', $clientsScores);
    }

    /**
     * Show the form for creating a new clients_scores.
     *
     * @return Response
     */
    public function create()
    {
        return view('clients_scores.create');
    }

    /**
     * Store a newly created clients_scores in storage.
     *
     * @param Createclients_scoresRequest $request
     *
     * @return Response
     */
    public function store(Createclients_scoresRequest $request)
    {
        $input = $request->all();

        $clientsScores = $this->clientsScoresRepository->create($input);

        Flash::success('Clients Scores saved successfully.');

        return redirect(route('clientsScores.index'));
    }

    /**
     * Display the specified clients_scores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clientsScores = $this->clientsScoresRepository->find($id);

        if (empty($clientsScores)) {
            Flash::error('Clients Scores not found');

            return redirect(route('clientsScores.index'));
        }

        return view('clients_scores.show')->with('clientsScores', $clientsScores);
    }

    /**
     * Show the form for editing the specified clients_scores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clientsScores = $this->clientsScoresRepository->find($id);

        if (empty($clientsScores)) {
            Flash::error('Clients Scores not found');

            return redirect(route('clientsScores.index'));
        }

        return view('clients_scores.edit')->with('clientsScores', $clientsScores);
    }

    /**
     * Update the specified clients_scores in storage.
     *
     * @param int $id
     * @param Updateclients_scoresRequest $request
     *
     * @return Response
     */
    public function update($id, Updateclients_scoresRequest $request)
    {
        $clientsScores = $this->clientsScoresRepository->find($id);

        if (empty($clientsScores)) {
            Flash::error('Clients Scores not found');

            return redirect(route('clientsScores.index'));
        }

        $clientsScores = $this->clientsScoresRepository->update($request->all(), $id);

        Flash::success('Clients Scores updated successfully.');

        return redirect(route('clientsScores.index'));
    }

    /**
     * Remove the specified clients_scores from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clientsScores = $this->clientsScoresRepository->find($id);

        if (empty($clientsScores)) {
            Flash::error('Clients Scores not found');

            return redirect(route('clientsScores.index'));
        }

        $this->clientsScoresRepository->delete($id);

        Flash::success('Clients Scores deleted successfully.');

        return redirect(route('clientsScores.index'));
    }
}
