<?php

namespace App\Repositories;

use App\Models\achievements;
use App\Repositories\BaseRepository;

/**
 * Class achievementsRepository
 * @package App\Repositories
 * @version August 24, 2019, 8:57 am UTC
*/

class achievementsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'length',
        'points'
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
        return achievements::class;
    }
}
