<?php

namespace App\Repositories;

use App\Models\products;
use App\Repositories\BaseRepository;

/**
 * Class productsRepository
 * @package App\Repositories
 * @version August 24, 2019, 6:18 am UTC
*/

class productsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'id_prod_cats',
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
        return products::class;
    }
}
