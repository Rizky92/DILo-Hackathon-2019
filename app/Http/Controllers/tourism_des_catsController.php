<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtourism_des_catsRequest;
use App\Http\Requests\Updatetourism_des_catsRequest;
use App\Repositories\tourism_des_catsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tourism_des_catsController extends AppBaseController
{
    /** @var  tourism_des_catsRepository */
    private $tourismDesCatsRepository;

    public function __construct(tourism_des_catsRepository $tourismDesCatsRepo)
    {
        $this->tourismDesCatsRepository = $tourismDesCatsRepo;
    }

    /**
     * Display a listing of the tourism_des_cats.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tourismDesCats = $this->tourismDesCatsRepository->all();

        return view('tourism_des_cats.index')
            ->with('tourismDesCats', $tourismDesCats);
    }

    /**
     * Show the form for creating a new tourism_des_cats.
     *
     * @return Response
     */
    public function create()
    {
        return view('tourism_des_cats.create');
    }

    /**
     * Store a newly created tourism_des_cats in storage.
     *
     * @param Createtourism_des_catsRequest $request
     *
     * @return Response
     */
    public function store(Createtourism_des_catsRequest $request)
    {
        $input = $request->all();

        $tourismDesCats = $this->tourismDesCatsRepository->create($input);

        Flash::success('Tourism Des Cats saved successfully.');

        return redirect(route('tourismDesCats.index'));
    }

    /**
     * Display the specified tourism_des_cats.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tourismDesCats = $this->tourismDesCatsRepository->find($id);

        if (empty($tourismDesCats)) {
            Flash::error('Tourism Des Cats not found');

            return redirect(route('tourismDesCats.index'));
        }

        return view('tourism_des_cats.show')->with('tourismDesCats', $tourismDesCats);
    }

    /**
     * Show the form for editing the specified tourism_des_cats.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tourismDesCats = $this->tourismDesCatsRepository->find($id);

        if (empty($tourismDesCats)) {
            Flash::error('Tourism Des Cats not found');

            return redirect(route('tourismDesCats.index'));
        }

        return view('tourism_des_cats.edit')->with('tourismDesCats', $tourismDesCats);
    }

    /**
     * Update the specified tourism_des_cats in storage.
     *
     * @param int $id
     * @param Updatetourism_des_catsRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetourism_des_catsRequest $request)
    {
        $tourismDesCats = $this->tourismDesCatsRepository->find($id);

        if (empty($tourismDesCats)) {
            Flash::error('Tourism Des Cats not found');

            return redirect(route('tourismDesCats.index'));
        }

        $tourismDesCats = $this->tourismDesCatsRepository->update($request->all(), $id);

        Flash::success('Tourism Des Cats updated successfully.');

        return redirect(route('tourismDesCats.index'));
    }

    /**
     * Remove the specified tourism_des_cats from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tourismDesCats = $this->tourismDesCatsRepository->find($id);

        if (empty($tourismDesCats)) {
            Flash::error('Tourism Des Cats not found');

            return redirect(route('tourismDesCats.index'));
        }

        $this->tourismDesCatsRepository->delete($id);

        Flash::success('Tourism Des Cats deleted successfully.');

        return redirect(route('tourismDesCats.index'));
    }
}
