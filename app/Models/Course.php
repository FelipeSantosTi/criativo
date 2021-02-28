<?php

namespace App\Models;

use App\School\Traits\SchoolTrait;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use SchoolTrait;

    protected $fillable = [
        'name',
        'url',
        'description'
    ];
}
