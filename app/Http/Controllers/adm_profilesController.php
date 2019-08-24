<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createadm_profilesRequest;
use App\Http\Requests\Updateadm_profilesRequest;
use App\Repositories\adm_profilesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class adm_profilesController extends AppBaseController
{
    /** @var  adm_profilesRepository */
    private $admProfilesRepository;

    public function __construct(adm_profilesRepository $admProfilesRepo)
    {
        $this->admProfilesRepository = $admProfilesRepo;
    }

    /**
     * Display a listing of the adm_profiles.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $admProfiles = $this->admProfilesRepository->all();

        return view('adm_profiles.index')
            ->with('admProfiles', $admProfiles);
    }

    /**
     * Show the form for creating a new adm_profiles.
     *
     * @return Response
     */
    public function create()
    {
        return view('adm_profiles.create');
    }

    /**
     * Store a newly created adm_profiles in storage.
     *
     * @param Createadm_profilesRequest $request
     *
     * @return Response
     */
    public function store(Createadm_profilesRequest $request)
    {
        $input = $request->all();

        $admProfiles = $this->admProfilesRepository->create($input);

        Flash::success('Adm Profiles saved successfully.');

        return redirect(route('admProfiles.index'));
    }

    /**
     * Display the specified adm_profiles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $admProfiles = $this->admProfilesRepository->find($id);

        if (empty($admProfiles)) {
            Flash::error('Adm Profiles not found');

            return redirect(route('admProfiles.index'));
        }

        return view('adm_profiles.show')->with('admProfiles', $admProfiles);
    }

    /**
     * Show the form for editing the specified adm_profiles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $admProfiles = $this->admProfilesRepository->find($id);

        if (empty($admProfiles)) {
            Flash::error('Adm Profiles not found');

            return redirect(route('admProfiles.index'));
        }

        return view('adm_profiles.edit')->with('admProfiles', $admProfiles);
    }

    /**
     * Update the specified adm_profiles in storage.
     *
     * @param int $id
     * @param Updateadm_profilesRequest $request
     *
     * @return Response
     */
    public function update($id, Updateadm_profilesRequest $request)
    {
        $admProfiles = $this->admProfilesRepository->find($id);

        if (empty($admProfiles)) {
            Flash::error('Adm Profiles not found');

            return redirect(route('admProfiles.index'));
        }

        $admProfiles = $this->admProfilesRepository->update($request->all(), $id);

        Flash::success('Adm Profiles updated successfully.');

        return redirect(route('admProfiles.index'));
    }

    /**
     * Remove the specified adm_profiles from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $admProfiles = $this->admProfilesRepository->find($id);

        if (empty($admProfiles)) {
            Flash::error('Adm Profiles not found');

            return redirect(route('admProfiles.index'));
        }

        $this->admProfilesRepository->delete($id);

        Flash::success('Adm Profiles deleted successfully.');

        return redirect(route('admProfiles.index'));
    }
}
