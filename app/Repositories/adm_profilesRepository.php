<?php

namespace App\Repositories;

use App\Models\adm_profiles;
use App\Repositories\BaseRepository;

/**
 * Class adm_profilesRepository
 * @package App\Repositories
 * @version August 24, 2019, 5:54 am UTC
*/

class adm_profilesRepository extends BaseRepository
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
        return adm_profiles::class;
    }
}
