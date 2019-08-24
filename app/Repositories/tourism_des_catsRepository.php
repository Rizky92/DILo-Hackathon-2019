<?php

namespace App\Repositories;

use App\Models\tourism_des_cats;
use App\Repositories\BaseRepository;

/**
 * Class tourism_des_catsRepository
 * @package App\Repositories
 * @version August 24, 2019, 6:07 am UTC
*/

class tourism_des_catsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return tourism_des_cats::class;
    }
}
