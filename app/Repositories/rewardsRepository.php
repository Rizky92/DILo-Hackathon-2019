<?php

namespace App\Repositories;

use App\Models\rewards;
use App\Repositories\BaseRepository;

/**
 * Class rewardsRepository
 * @package App\Repositories
 * @version August 24, 2019, 8:55 am UTC
*/

class rewardsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'point_cost'
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
        return rewards::class;
    }
}
