<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createprod_catsRequest;
use App\Http\Requests\Updateprod_catsRequest;
use App\Repositories\prod_catsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class prod_catsController extends AppBaseController
{
    /** @var  prod_catsRepository */
    private $prodCatsRepository;

    public function __construct(prod_catsRepository $prodCatsRepo)
    {
        $this->prodCatsRepository = $prodCatsRepo;
    }

    /**
     * Display a listing of the prod_cats.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $prodCats = $this->prodCatsRepository->all();

        return view('prod_cats.index')
            ->with('prodCats', $prodCats);
    }

    /**
     * Show the form for creating a new prod_cats.
     *
     * @return Response
     */
    public function create()
    {
        return view('prod_cats.create');
    }

    /**
     * Store a newly created prod_cats in storage.
     *
     * @param Createprod_catsRequest $request
     *
     * @return Response
     */
    public function store(Createprod_catsRequest $request)
    {
        $input = $request->all();

        $prodCats = $this->prodCatsRepository->create($input);

        Flash::success('Prod Cats saved successfully.');

        return redirect(route('prodCats.index'));
    }

    /**
     * Display the specified prod_cats.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prodCats = $this->prodCatsRepository->find($id);

        if (empty($prodCats)) {
            Flash::error('Prod Cats not found');

            return redirect(route('prodCats.index'));
        }

        return view('prod_cats.show')->with('prodCats', $prodCats);
    }

    /**
     * Show the form for editing the specified prod_cats.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prodCats = $this->prodCatsRepository->find($id);

        if (empty($prodCats)) {
            Flash::error('Prod Cats not found');

            return redirect(route('prodCats.index'));
        }

        return view('prod_cats.edit')->with('prodCats', $prodCats);
    }

    /**
     * Update the specified prod_cats in storage.
     *
     * @param int $id
     * @param Updateprod_catsRequest $request
     *
     * @return Response
     */
    public function update($id, Updateprod_catsRequest $request)
    {
        $prodCats = $this->prodCatsRepository->find($id);

        if (empty($prodCats)) {
            Flash::error('Prod Cats not found');

            return redirect(route('prodCats.index'));
        }

        $prodCats = $this->prodCatsRepository->update($request->all(), $id);

        Flash::success('Prod Cats updated successfully.');

        return redirect(route('prodCats.index'));
    }

    /**
     * Remove the specified prod_cats from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prodCats = $this->prodCatsRepository->find($id);

        if (empty($prodCats)) {
            Flash::error('Prod Cats not found');

            return redirect(route('prodCats.index'));
        }

        $this->prodCatsRepository->delete($id);

        Flash::success('Prod Cats deleted successfully.');

        return redirect(route('prodCats.index'));
    }
}
