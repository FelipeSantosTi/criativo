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

    public function index(Request $request)
    {
        $per_page = (int) $request->get('per_page', 15);

        $schools = $this->schoolService->getAllSchools($per_page);

        return SchoolResource::collection($schools);
    }

    public function show($uuid)
    {
        if (!$school = $this->schoolService->getSchoolByUuid($uuid)) {
            return response()->json(['message' => 'Not Found!']);
        }


        return new SchoolResource($school);
    }
}
