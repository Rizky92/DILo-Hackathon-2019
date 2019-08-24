<?php

namespace App\Repositories;

use App\Models\reports;
use App\Repositories\BaseRepository;

/**
 * Class reportsRepository
 * @package App\Repositories
 * @version August 24, 2019, 6:43 am UTC
*/

class reportsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'date',
        'target',
        'achieved',
        'num_of_reservations',
        'num_of_visitors',
        'income_amount',
        'costs',
        'profit',
        'margin'
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
        return reports::class;
    }
}
