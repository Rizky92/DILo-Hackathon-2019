<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Createclients_usersAPIRequest;
use App\Http\Requests\API\Updateclients_usersAPIRequest;
use App\Models\clients_users;
use App\Repositories\clients_usersRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class clients_usersController
 * @package App\Http\Controllers\API
 */

class clients_usersAPIController extends AppBaseController
{
    /** @var  clients_usersRepository */
    private $clientsUsersRepository;

    public function __construct(clients_usersRepository $clientsUsersRepo)
    {
        $this->clientsUsersRepository = $clientsUsersRepo;
    }

    /**
     * Display a listing of the clients_users.
     * GET|HEAD /clientsUsers
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $clientsUsers = $this->clientsUsersRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($clientsUsers->toArray(), 'Clients Users retrieved successfully');
    }

    /**
     * Store a newly created clients_users in storage.
     * POST /clientsUsers
     *
     * @param Createclients_usersAPIRequest $request
     *
     * @return Response
     */
    public function store(Createclients_usersAPIRequest $request)
    {
        $input = $request->all();

        $clientsUsers = $this->clientsUsersRepository->create($input);

        return $this->sendResponse($clientsUsers->toArray(), 'Clients Users saved successfully');
    }

    /**
     * Display the specified clients_users.
     * GET|HEAD /clientsUsers/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var clients_users $clientsUsers */
        $clientsUsers = $this->clientsUsersRepository->find($id);

        if (empty($clientsUsers)) {
            return $this->sendError('Clients Users not found');
        }

        return $this->sendResponse($clientsUsers->toArray(), 'Clients Users retrieved successfully');
    }

    /**
     * Update the specified clients_users in storage.
     * PUT/PATCH /clientsUsers/{id}
     *
     * @param int $id
     * @param Updateclients_usersAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Updateclients_usersAPIRequest $request)
    {
        $input = $request->all();

        /** @var clients_users $clientsUsers */
        $clientsUsers = $this->clientsUsersRepository->find($id);

        if (empty($clientsUsers)) {
            return $this->sendError('Clients Users not found');
        }

        $clientsUsers = $this->clientsUsersRepository->update($input, $id);

        return $this->sendResponse($clientsUsers->toArray(), 'clients_users updated successfully');
    }

    /**
     * Remove the specified clients_users from storage.
     * DELETE /clientsUsers/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var clients_users $clientsUsers */
        $clientsUsers = $this->clientsUsersRepository->find($id);

        if (empty($clientsUsers)) {
            return $this->sendError('Clients Users not found');
        }

        $clientsUsers->delete();

        return $this->sendResponse($id, 'Clients Users deleted successfully');
    }
}
