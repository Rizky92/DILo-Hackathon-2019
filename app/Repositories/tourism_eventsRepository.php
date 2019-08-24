<?php

namespace App\Repositories;

use App\Models\tourism_events;
use App\Repositories\BaseRepository;

/**
 * Class tourism_eventsRepository
 * @package App\Repositories
 * @version August 24, 2019, 10:17 am UTC
*/

class tourism_eventsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'id_event_cats',
        'desc',
        'event_holder',
        'event_holder_tel',
        'event_holder_email',
        'date_start',
        'date_end',
        'time_start',
        'time_end',
        'isDays',
        'quota',
        'rundown_id',
        'tourism_id'
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
        return tourism_events::class;
    }
}
