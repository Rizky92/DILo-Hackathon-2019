<?php

namespace App\Repositories;

use App\Models\services;
use App\Repositories\BaseRepository;

/**
 * Class servicesRepository
 * @package App\Repositories
 * @version August 24, 2019, 6:36 am UTC
*/

class servicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'desc',
        'price',
        'isAvailable',
        'contact_tel',
        'contact_email'
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
        return services::class;
    }
}
