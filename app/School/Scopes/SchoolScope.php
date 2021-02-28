<?php


namespace App\School\Scopes;


use App\School\ManagerSchool;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class SchoolScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('school_id', app(ManagerSchool::class)->getSchoolIdentify());
    }
}
