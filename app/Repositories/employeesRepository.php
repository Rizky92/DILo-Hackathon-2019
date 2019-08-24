<?php

namespace App\Repositories;

use App\Models\employees;
use App\Repositories\BaseRepository;

/**
 * Class employeesRepository
 * @package App\Repositories
 * @version August 24, 2019, 6:37 am UTC
*/

class employeesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'tgl_lahir',
        'jk',
        'alamat',
        'no_hp',
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
        return employees::class;
    }
}
