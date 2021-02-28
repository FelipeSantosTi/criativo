<?php


namespace App\School;

use App\Models\School;

class ManagerSchool
{
    public function getSchoolIdentify(): int
    {
        return auth()->user()->school_id;
    }

    public function getSchool(): School
    {
        return auth()->user()->school;
    }

    public function isAdmin(): bool
    {
        return in_array(auth()->user()->email, config('school.admins'));
    }
}
