<?php

namespace App\Models;

use App\School\Traits\SchoolTrait;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use SchoolTrait;

    protected $fillable = [
        'name',
        'description',
        'url'
    ];

    public function grades()
    {
        return $this->belongsToMany(Grade::class);
    }
}
