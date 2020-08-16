<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    private $companies = [
        [
            'name' => 'company1',
            'country_id' => '1',
        ],
        [
            'name' => 'company2',
            'country_id' => '2',
        ],
        [
            'name' => 'company3',
            'country_id' => '3',
        ],
        [
            'name' => 'company4',
            'country_id' => '4',
        ],
        [
            'name' => 'company5',
            'country_id' => '1',
        ],
        [
            'name' => 'company6',
            'country_id' => '2',
        ],
        [
            'name' => 'company7',
            'country_id' => '3',
        ],
        [
            'name' => 'company8',
            'country_id' => '4',
        ],
        [
            'name' => 'company9',
            'country_id' => '1',
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->companies as $company) {
            DB::table('company')->insert([
                'name' => $company['name'],
                'country_id' => $company['country_id'],
            ]);
        }
    }
}
