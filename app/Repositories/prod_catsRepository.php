<?php

namespace App\Repositories;

use App\Models\prod_cats;
use App\Repositories\BaseRepository;

/**
 * Class prod_catsRepository
 * @package App\Repositories
 * @version August 24, 2019, 6:13 am UTC
*/

class prod_catsRepository extends BaseRepository
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
        return prod_cats::class;
    }
}
