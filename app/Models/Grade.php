<?php

namespace App\Models;

use App\School\Traits\SchoolTrait;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use SchoolTrait;

    protected $fillable = [
        'name',
        'description',
        'url'
    ];

    public function courses()
    {
        return $this->belongsTo(Course::class);
    }
}
