<?php

namespace App\Repositories;

use App\Models\clients_bookmarks;
use App\Repositories\BaseRepository;

/**
 * Class clients_bookmarksRepository
 * @package App\Repositories
 * @version August 24, 2019, 9:38 am UTC
*/

class clients_bookmarksRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'users_id',
        'tourism_id',
        'date',
        'title'
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
        return clients_bookmarks::class;
    }
}
