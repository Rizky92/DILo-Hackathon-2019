<?php

namespace App\Repositories;

use App\Models\clients_profiles;
use App\Repositories\BaseRepository;

/**
 * Class clients_profilesRepository
 * @package App\Repositories
 * @version August 24, 2019, 9:30 am UTC
*/

class clients_profilesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'tgl_lahir',
        'jk',
        'alamat',
        'no_hp',
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
        return clients_profiles::class;
    }
}
