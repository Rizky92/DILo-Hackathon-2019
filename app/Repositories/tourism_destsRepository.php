<?php

namespace App\Repositories;

use App\Models\tourism_dests;
use App\Repositories\BaseRepository;

/**
 * Class tourism_destsRepository
 * @package App\Repositories
 * @version August 24, 2019, 6:13 am UTC
*/

class tourism_destsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'desc',
        'address',
        'owner',
        'id_des_cats',
        'coords',
        'email',
        'tel'
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
        return tourism_dests::class;
    }
}
