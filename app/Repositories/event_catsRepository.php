<?php

namespace App\Repositories;

use App\Models\event_cats;
use App\Repositories\BaseRepository;

/**
 * Class event_catsRepository
 * @package App\Repositories
 * @version August 24, 2019, 8:44 am UTC
*/

class event_catsRepository extends BaseRepository
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
        return event_cats::class;
    }
}
