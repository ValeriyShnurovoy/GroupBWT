<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    private $countries = [
        'Canada',
        'USA',
        'France',
        'Germany',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->countries as $country) {
            DB::table('country')->insert([
                'country' => $country,
            ]);
        }
    }
}
