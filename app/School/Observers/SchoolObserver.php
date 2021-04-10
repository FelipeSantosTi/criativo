<?php


namespace App\School\Observers;


use App\School\ManagerSchool;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SchoolObserver
{
    public function creating(Model $model)
    {
        $managerSchool = app(ManagerSchool::class);

        $model->school_id = $managerSchool->getSchoolIdentify();
    }
}
