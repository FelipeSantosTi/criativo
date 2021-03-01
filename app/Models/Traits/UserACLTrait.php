<?php


namespace App\Models\Traits;


trait UserACLTrait
{
    public function permissions()
    {
        $school = $this->school;
        $plan = $school->plan;

        $permissions = [];
        foreach ($plan->profiles as $profile) {
            foreach ($profile->permissions as $permission) {
                array_push($permissions, $permission->name);
            }
        }

        return $permissions;
    }

    public function hasPermission(string $permissionName): bool
    {
        return in_array($permissionName, $this->permissions());
    }

    public function isAdmin(): bool
    {
        return in_array($this->email, config('acl.admins'));
    }

    public function isSchool(): bool
    {
        return !in_array($this->email, config('acl.admins'));
    }
}
