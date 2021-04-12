<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SchoolResource;
use App\Services\SchoolService;
use Illuminate\Http\Request;

class SchoolApiController extends Controller
{
    protected $schoolService;

    public function __construct(SchoolService $schoolService)
    {
        $this->schoolService = $schoolService;
    }

    public function index()
    {
        return SchoolResource::collection($this->schoolService->getAllSchools());
    }
}
