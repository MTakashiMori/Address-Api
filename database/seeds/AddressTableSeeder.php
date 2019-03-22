<?php

use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        factory(App\Address::class, 10)->create()->each(function ($address) {
            $address->save();
        });
    }
}
