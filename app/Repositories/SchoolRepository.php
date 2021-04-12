<?php

namespace App\Repositories;

use App\Models\School;
use App\Repositories\Contracts\SchoolRepositoryInterface;

class SchoolRepository implements SchoolRepositoryInterface
{
    protected $entity;

    public function __construct(School $school)
    {
        $this->entity = $school;
    }

    public function getAllSchools()
    {
        return $this->entity->all();
    }
}
