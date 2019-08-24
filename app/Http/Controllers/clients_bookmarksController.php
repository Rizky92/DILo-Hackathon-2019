<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createclients_bookmarksRequest;
use App\Http\Requests\Updateclients_bookmarksRequest;
use App\Repositories\clients_bookmarksRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class clients_bookmarksController extends AppBaseController
{
    /** @var  clients_bookmarksRepository */
    private $clientsBookmarksRepository;

    public function __construct(clients_bookmarksRepository $clientsBookmarksRepo)
    {
        $this->clientsBookmarksRepository = $clientsBookmarksRepo;
    }

    /**
     * Display a listing of the clients_bookmarks.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $clientsBookmarks = $this->clientsBookmarksRepository->all();

        return view('clients_bookmarks.index')
            ->with('clientsBookmarks', $clientsBookmarks);
    }

    /**
     * Show the form for creating a new clients_bookmarks.
     *
     * @return Response
     */
    public function create()
    {
        return view('clients_bookmarks.create');
    }

    /**
     * Store a newly created clients_bookmarks in storage.
     *
     * @param Createclients_bookmarksRequest $request
     *
     * @return Response
     */
    public function store(Createclients_bookmarksRequest $request)
    {
        $input = $request->all();

        $clientsBookmarks = $this->clientsBookmarksRepository->create($input);

        Flash::success('Clients Bookmarks saved successfully.');

        return redirect(route('clientsBookmarks.index'));
    }

    /**
     * Display the specified clients_bookmarks.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clientsBookmarks = $this->clientsBookmarksRepository->find($id);

        if (empty($clientsBookmarks)) {
            Flash::error('Clients Bookmarks not found');

            return redirect(route('clientsBookmarks.index'));
        }

        return view('clients_bookmarks.show')->with('clientsBookmarks', $clientsBookmarks);
    }

    /**
     * Show the form for editing the specified clients_bookmarks.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clientsBookmarks = $this->clientsBookmarksRepository->find($id);

        if (empty($clientsBookmarks)) {
            Flash::error('Clients Bookmarks not found');

            return redirect(route('clientsBookmarks.index'));
        }

        return view('clients_bookmarks.edit')->with('clientsBookmarks', $clientsBookmarks);
    }

    /**
     * Update the specified clients_bookmarks in storage.
     *
     * @param int $id
     * @param Updateclients_bookmarksRequest $request
     *
     * @return Response
     */
    public function update($id, Updateclients_bookmarksRequest $request)
    {
        $clientsBookmarks = $this->clientsBookmarksRepository->find($id);

        if (empty($clientsBookmarks)) {
            Flash::error('Clients Bookmarks not found');

            return redirect(route('clientsBookmarks.index'));
        }

        $clientsBookmarks = $this->clientsBookmarksRepository->update($request->all(), $id);

        Flash::success('Clients Bookmarks updated successfully.');

        return redirect(route('clientsBookmarks.index'));
    }

    /**
     * Remove the specified clients_bookmarks from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clientsBookmarks = $this->clientsBookmarksRepository->find($id);

        if (empty($clientsBookmarks)) {
            Flash::error('Clients Bookmarks not found');

            return redirect(route('clientsBookmarks.index'));
        }

        $this->clientsBookmarksRepository->delete($id);

        Flash::success('Clients Bookmarks deleted successfully.');

        return redirect(route('clientsBookmarks.index'));
    }
}
