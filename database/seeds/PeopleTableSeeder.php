<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        factory(App\People::class, 10)->create()->each(function ($people) {
            $people->save();
        });
    }
}
