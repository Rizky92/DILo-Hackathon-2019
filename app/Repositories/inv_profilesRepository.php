<?php

namespace App\Repositories;

use App\Models\inv_profiles;
use App\Repositories\BaseRepository;

/**
 * Class inv_profilesRepository
 * @package App\Repositories
 * @version August 24, 2019, 9:04 am UTC
*/

class inv_profilesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'desc_profile',
        'address',
        'owner',
        'coords',
        'email',
        'telp'
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
        return inv_profiles::class;
    }
}
