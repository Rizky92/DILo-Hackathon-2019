<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createinv_profilesRequest;
use App\Http\Requests\Updateinv_profilesRequest;
use App\Repositories\inv_profilesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class inv_profilesController extends AppBaseController
{
    /** @var  inv_profilesRepository */
    private $invProfilesRepository;

    public function __construct(inv_profilesRepository $invProfilesRepo)
    {
        $this->invProfilesRepository = $invProfilesRepo;
    }

    /**
     * Display a listing of the inv_profiles.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $invProfiles = $this->invProfilesRepository->all();

        return view('inv_profiles.index')
            ->with('invProfiles', $invProfiles);
    }

    /**
     * Show the form for creating a new inv_profiles.
     *
     * @return Response
     */
    public function create()
    {
        return view('inv_profiles.create');
    }

    /**
     * Store a newly created inv_profiles in storage.
     *
     * @param Createinv_profilesRequest $request
     *
     * @return Response
     */
    public function store(Createinv_profilesRequest $request)
    {
        $input = $request->all();

        $invProfiles = $this->invProfilesRepository->create($input);

        Flash::success('Inv Profiles saved successfully.');

        return redirect(route('invProfiles.index'));
    }

    /**
     * Display the specified inv_profiles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $invProfiles = $this->invProfilesRepository->find($id);

        if (empty($invProfiles)) {
            Flash::error('Inv Profiles not found');

            return redirect(route('invProfiles.index'));
        }

        return view('inv_profiles.show')->with('invProfiles', $invProfiles);
    }

    /**
     * Show the form for editing the specified inv_profiles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $invProfiles = $this->invProfilesRepository->find($id);

        if (empty($invProfiles)) {
            Flash::error('Inv Profiles not found');

            return redirect(route('invProfiles.index'));
        }

        return view('inv_profiles.edit')->with('invProfiles', $invProfiles);
    }

    /**
     * Update the specified inv_profiles in storage.
     *
     * @param int $id
     * @param Updateinv_profilesRequest $request
     *
     * @return Response
     */
    public function update($id, Updateinv_profilesRequest $request)
    {
        $invProfiles = $this->invProfilesRepository->find($id);

        if (empty($invProfiles)) {
            Flash::error('Inv Profiles not found');

            return redirect(route('invProfiles.index'));
        }

        $invProfiles = $this->invProfilesRepository->update($request->all(), $id);

        Flash::success('Inv Profiles updated successfully.');

        return redirect(route('invProfiles.index'));
    }

    /**
     * Remove the specified inv_profiles from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $invProfiles = $this->invProfilesRepository->find($id);

        if (empty($invProfiles)) {
            Flash::error('Inv Profiles not found');

            return redirect(route('invProfiles.index'));
        }

        $this->invProfilesRepository->delete($id);

        Flash::success('Inv Profiles deleted successfully.');

        return redirect(route('invProfiles.index'));
    }
}
