<?php

namespace App\Listeners;

use App\Models\Role;
use App\School\Events\SchoolCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AddRoleSchool
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(SchoolCreated $event)
    {
        $user = $event->user();

        if (!$role = Role::first()){
            return;
        }

        $user->roles()->attach($role);

        return 1;

    }
}
