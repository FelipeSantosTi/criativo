<?php

use Illuminate\Database\Seeder;
use App\Models\School;
use App\Models\Plan;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plan = Plan::first();

        $plan->schools()->create([
            'cnpj' => '1234567891011',
            'name' => 'Criativo',
            'url' => 'criativo',
            'email' => 'criativo@criativo.com.br'
        ]);
    }
}
