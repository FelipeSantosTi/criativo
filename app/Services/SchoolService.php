<?php


namespace App\Services;


use App\Models\Plan;
use App\Repositories\Contracts\SchoolRepositoryInterface;
use Illuminate\Support\Str;

class SchoolService
{
    private $plan, $data = [];
    private $repository;

    public function __construct(SchoolRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllSchools()
    {
        return $this->repository->getAllSchools();
    }

    public function make(Plan $plan, array $data)
    {
        $this->plan = $plan;
        $this->data = $data;

        $school = $this->storeSchool();
        $user = $this->storeUser($school);

        return $user;
    }

    public function storeSchool()
    {
        $data = $this->data;

        return $this->plan->schools()->create([
            'cnpj' => $data['cnpj'],
            'name' => $data['company'],
            'email' => $data['email'],

            'subscription' => now(),
            'expires_at' => now()->addDays(7),
        ]);
    }

    public function storeUser($school)
    {
        $user = $school->users()->create([
            'name' => $this->data['name'],
            'email' => $this->data['email'],
            'password' => bcrypt($this->data['password']),
        ]);

        return $user;
    }
}
