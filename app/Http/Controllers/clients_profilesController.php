<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createclients_profilesRequest;
use App\Http\Requests\Updateclients_profilesRequest;
use App\Repositories\clients_profilesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class clients_profilesController extends AppBaseController
{
    /** @var  clients_profilesRepository */
    private $clientsProfilesRepository;

    public function __construct(clients_profilesRepository $clientsProfilesRepo)
    {
        $this->clientsProfilesRepository = $clientsProfilesRepo;
    }

    /**
     * Display a listing of the clients_profiles.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $clientsProfiles = $this->clientsProfilesRepository->all();

        return view('clients_profiles.index')
            ->with('clientsProfiles', $clientsProfiles);
    }

    /**
     * Show the form for creating a new clients_profiles.
     *
     * @return Response
     */
    public function create()
    {
        return view('clients_profiles.create');
    }

    /**
     * Store a newly created clients_profiles in storage.
     *
     * @param Createclients_profilesRequest $request
     *
     * @return Response
     */
    public function store(Createclients_profilesRequest $request)
    {
        $input = $request->all();

        $clientsProfiles = $this->clientsProfilesRepository->create($input);

        Flash::success('Clients Profiles saved successfully.');

        return redirect(route('clientsProfiles.index'));
    }

    /**
     * Display the specified clients_profiles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clientsProfiles = $this->clientsProfilesRepository->find($id);

        if (empty($clientsProfiles)) {
            Flash::error('Clients Profiles not found');

            return redirect(route('clientsProfiles.index'));
        }

        return view('clients_profiles.show')->with('clientsProfiles', $clientsProfiles);
    }

    /**
     * Show the form for editing the specified clients_profiles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clientsProfiles = $this->clientsProfilesRepository->find($id);

        if (empty($clientsProfiles)) {
            Flash::error('Clients Profiles not found');

            return redirect(route('clientsProfiles.index'));
        }

        return view('clients_profiles.edit')->with('clientsProfiles', $clientsProfiles);
    }

    /**
     * Update the specified clients_profiles in storage.
     *
     * @param int $id
     * @param Updateclients_profilesRequest $request
     *
     * @return Response
     */
    public function update($id, Updateclients_profilesRequest $request)
    {
        $clientsProfiles = $this->clientsProfilesRepository->find($id);

        if (empty($clientsProfiles)) {
            Flash::error('Clients Profiles not found');

            return redirect(route('clientsProfiles.index'));
        }

        $clientsProfiles = $this->clientsProfilesRepository->update($request->all(), $id);

        Flash::success('Clients Profiles updated successfully.');

        return redirect(route('clientsProfiles.index'));
    }

    /**
     * Remove the specified clients_profiles from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clientsProfiles = $this->clientsProfilesRepository->find($id);

        if (empty($clientsProfiles)) {
            Flash::error('Clients Profiles not found');

            return redirect(route('clientsProfiles.index'));
        }

        $this->clientsProfilesRepository->delete($id);

        Flash::success('Clients Profiles deleted successfully.');

        return redirect(route('clientsProfiles.index'));
    }
}
