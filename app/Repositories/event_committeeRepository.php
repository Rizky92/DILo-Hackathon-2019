<?php

namespace App\Repositories;

use App\Models\event_committee;
use App\Repositories\BaseRepository;

/**
 * Class event_committeeRepository
 * @package App\Repositories
 * @version August 24, 2019, 8:44 am UTC
*/

class event_committeeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'role',
        'tel',
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
        return event_committee::class;
    }
}
