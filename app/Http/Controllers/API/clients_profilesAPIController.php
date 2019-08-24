<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Createclients_profilesAPIRequest;
use App\Http\Requests\API\Updateclients_profilesAPIRequest;
use App\Models\clients_profiles;
use App\Repositories\clients_profilesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class clients_profilesController
 * @package App\Http\Controllers\API
 */

class clients_profilesAPIController extends AppBaseController
{
    /** @var  clients_profilesRepository */
    private $clientsProfilesRepository;

    public function __construct(clients_profilesRepository $clientsProfilesRepo)
    {
        $this->clientsProfilesRepository = $clientsProfilesRepo;
    }

    /**
     * Display a listing of the clients_profiles.
     * GET|HEAD /clientsProfiles
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $clientsProfiles = $this->clientsProfilesRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($clientsProfiles->toArray(), 'Clients Profiles retrieved successfully');
    }

    /**
     * Store a newly created clients_profiles in storage.
     * POST /clientsProfiles
     *
     * @param Createclients_profilesAPIRequest $request
     *
     * @return Response
     */
    public function store(Createclients_profilesAPIRequest $request)
    {
        $input = $request->all();

        $clientsProfiles = $this->clientsProfilesRepository->create($input);

        return $this->sendResponse($clientsProfiles->toArray(), 'Clients Profiles saved successfully');
    }

    /**
     * Display the specified clients_profiles.
     * GET|HEAD /clientsProfiles/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var clients_profiles $clientsProfiles */
        $clientsProfiles = $this->clientsProfilesRepository->find($id);

        if (empty($clientsProfiles)) {
            return $this->sendError('Clients Profiles not found');
        }

        return $this->sendResponse($clientsProfiles->toArray(), 'Clients Profiles retrieved successfully');
    }

    /**
     * Update the specified clients_profiles in storage.
     * PUT/PATCH /clientsProfiles/{id}
     *
     * @param int $id
     * @param Updateclients_profilesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Updateclients_profilesAPIRequest $request)
    {
        $input = $request->all();

        /** @var clients_profiles $clientsProfiles */
        $clientsProfiles = $this->clientsProfilesRepository->find($id);

        if (empty($clientsProfiles)) {
            return $this->sendError('Clients Profiles not found');
        }

        $clientsProfiles = $this->clientsProfilesRepository->update($input, $id);

        return $this->sendResponse($clientsProfiles->toArray(), 'clients_profiles updated successfully');
    }

    /**
     * Remove the specified clients_profiles from storage.
     * DELETE /clientsProfiles/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var clients_profiles $clientsProfiles */
        $clientsProfiles = $this->clientsProfilesRepository->find($id);

        if (empty($clientsProfiles)) {
            return $this->sendError('Clients Profiles not found');
        }

        $clientsProfiles->delete();

        return $this->sendResponse($id, 'Clients Profiles deleted successfully');
    }
}
