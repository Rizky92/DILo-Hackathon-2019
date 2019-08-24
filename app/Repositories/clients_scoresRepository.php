<?php

namespace App\Repositories;

use App\Models\clients_scores;
use App\Repositories\BaseRepository;

/**
 * Class clients_scoresRepository
 * @package App\Repositories
 * @version August 24, 2019, 9:33 am UTC
*/

class clients_scoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'users_id',
        'total_points'
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
        return clients_scores::class;
    }
}
