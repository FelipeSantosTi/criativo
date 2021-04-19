<?php

namespace App\Repositories\Contracts;

interface SchoolRepositoryInterface
{
    public function getAllSchools(int $per_page);

    public function getSchoolByUuid(string $uuid);
}
