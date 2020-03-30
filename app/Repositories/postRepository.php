<?php

namespace App\Repositories;

use App\Models\post;
use App\Repositories\BaseRepository;

/**
 * Class postRepository
 * @package App\Repositories
 * @version March 30, 2020, 1:37 pm UTC
*/

class postRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'dateposted'
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
        return post::class;
    }
}
