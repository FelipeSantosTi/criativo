<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\School;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school = School::first();

        $school->users()->create([
            'name' => 'Felipe Santos',
            'email' => 'felipe@thunderbyte.com.br',
            'password' => bcrypt('Felipe13')
        ]);
    }
}
