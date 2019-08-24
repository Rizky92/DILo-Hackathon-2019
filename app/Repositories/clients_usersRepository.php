<?php

namespace App\Repositories;

use App\Models\clients_users;
use App\Repositories\BaseRepository;

/**
 * Class clients_usersRepository
 * @package App\Repositories
 * @version August 24, 2019, 9:29 am UTC
*/

class clients_usersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'username',
        'password',
        'email'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return clients_users::class;
    }
}
