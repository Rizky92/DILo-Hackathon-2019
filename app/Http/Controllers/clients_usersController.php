<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createclients_usersRequest;
use App\Http\Requests\Updateclients_usersRequest;
use App\Repositories\clients_usersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class clients_usersController extends AppBaseController
{
    /** @var  clients_usersRepository */
    private $clientsUsersRepository;

    public function __construct(clients_usersRepository $clientsUsersRepo)
    {
        $this->clientsUsersRepository = $clientsUsersRepo;
    }

    /**
     * Display a listing of the clients_users.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $clientsUsers = $this->clientsUsersRepository->all();

        return view('clients_users.index')
            ->with('clientsUsers', $clientsUsers);
    }

    /**
     * Show the form for creating a new clients_users.
     *
     * @return Response
     */
    public function create()
    {
        return view('clients_users.create');
    }

    /**
     * Store a newly created clients_users in storage.
     *
     * @param Createclients_usersRequest $request
     *
     * @return Response
     */
    public function store(Createclients_usersRequest $request)
    {
        $input = $request->all();

        $clientsUsers = $this->clientsUsersRepository->create($input);

        Flash::success('Clients Users saved successfully.');

        return redirect(route('clientsUsers.index'));
    }

    /**
     * Display the specified clients_users.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clientsUsers = $this->clientsUsersRepository->find($id);

        if (empty($clientsUsers)) {
            Flash::error('Clients Users not found');

            return redirect(route('clientsUsers.index'));
        }

        return view('clients_users.show')->with('clientsUsers', $clientsUsers);
    }

    /**
     * Show the form for editing the specified clients_users.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clientsUsers = $this->clientsUsersRepository->find($id);

        if (empty($clientsUsers)) {
            Flash::error('Clients Users not found');

            return redirect(route('clientsUsers.index'));
        }

        return view('clients_users.edit')->with('clientsUsers', $clientsUsers);
    }

    /**
     * Update the specified clients_users in storage.
     *
     * @param int $id
     * @param Updateclients_usersRequest $request
     *
     * @return Response
     */
    public function update($id, Updateclients_usersRequest $request)
    {
        $clientsUsers = $this->clientsUsersRepository->find($id);

        if (empty($clientsUsers)) {
            Flash::error('Clients Users not found');

            return redirect(route('clientsUsers.index'));
        }

        $clientsUsers = $this->clientsUsersRepository->update($request->all(), $id);

        Flash::success('Clients Users updated successfully.');

        return redirect(route('clientsUsers.index'));
    }

    /**
     * Remove the specified clients_users from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clientsUsers = $this->clientsUsersRepository->find($id);

        if (empty($clientsUsers)) {
            Flash::error('Clients Users not found');

            return redirect(route('clientsUsers.index'));
        }

        $this->clientsUsersRepository->delete($id);

        Flash::success('Clients Users deleted successfully.');

        return redirect(route('clientsUsers.index'));
    }
}
