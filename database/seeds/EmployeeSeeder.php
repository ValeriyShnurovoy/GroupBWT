<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    private $employees = [
        [
            'user_id' => '1',
            'company_id' => '1',
            'start_date' => '2010.10.10',
            'finish_date' => '2010.11.10',
        ],
        [
            'user_id' => '1',
            'company_id' => '2',
            'start_date' => '2010.12.10',
            'finish_date' => '2011.01.10',
        ],
        [
            'user_id' => '1',
            'company_id' => '3',
            'start_date' => '2011.02.10',
            'finish_date' => '2011.03.10',
        ],
        [
            'user_id' => '2',
            'company_id' => '2',
            'start_date' => '2010.10.10',
            'finish_date' => '2010.11.10',
        ],
        [
            'user_id' => '2',
            'company_id' => '3',
            'start_date' => '2010.12.10',
            'finish_date' => '2011.01.10'
        ],
        [
            'user_id' => '2',
            'company_id' => '4',
            'start_date' => '2011.02.10',
            'finish_date' => '2011.03.10',
        ],
        [
            'user_id' => '3',
            'company_id' => '3',
            'start_date' => '2010.10.10',
            'finish_date' => '2010.11.10',
        ],
        [
            'user_id' => '3',
            'company_id' => '4',
            'start_date' => '2010.12.10',
            'finish_date' => '2011.01.10'
        ],
        [
            'user_id' => '3',
            'company_id' => '5',
            'start_date' => '2011.02.10',
            'finish_date' => '2011.03.10',
        ],
        [
            'user_id' => '4',
            'company_id' => '4',
            'start_date' => '2010.10.10',
            'finish_date' => '2010.11.10',
        ],
        [
            'user_id' => '4',
            'company_id' => '5',
            'start_date' => '2010.12.10',
            'finish_date' => '2011.01.10'
        ],
        [
            'user_id' => '4',
            'company_id' => '6',
            'start_date' => '2011.02.10',
            'finish_date' => '2011.03.10',
        ],
        [
            'user_id' => '5',
            'company_id' => '5',
            'start_date' => '2010.10.10',
            'finish_date' => '2010.11.10',
        ],
        [
            'user_id' => '5',
            'company_id' => '6',
            'start_date' => '2010.12.10',
            'finish_date' => '2011.01.10'
        ],
        [
            'user_id' => '5',
            'company_id' => '7',
            'start_date' => '2011.02.10',
            'finish_date' => '2011.03.10',
        ],
        [
            'user_id' => '6',
            'company_id' => '6',
            'start_date' => '2010.10.10',
            'finish_date' => '2010.11.10',
        ],
        [
            'user_id' => '6',
            'company_id' => '7',
            'start_date' => '2010.12.10',
            'finish_date' => '2011.01.10'
        ],
        [
            'user_id' => '6',
            'company_id' => '8',
            'start_date' => '2011.02.10',
            'finish_date' => '2011.03.10',
        ],
        [
            'user_id' => '7',
            'company_id' => '9',
            'start_date' => '2010.10.10',
            'finish_date' => '2010.11.10',
        ],
        [
            'user_id' => '7',
            'company_id' => '1',
            'start_date' => '2010.12.10',
            'finish_date' => '2011.01.10'
        ],
        [
            'user_id' => '7',
            'company_id' => '3',
            'start_date' => '2011.02.10',
            'finish_date' => '2011.03.10',
        ],
        [
            'user_id' => '8',
            'company_id' => '2',
            'start_date' => '2010.10.10',
            'finish_date' => '2010.11.10',
        ],
        [
            'user_id' => '8',
            'company_id' => '4',
            'start_date' => '2010.12.10',
            'finish_date' => '2011.01.10'
        ],
        [
            'user_id' => '8',
            'company_id' => '6',
            'start_date' => '2011.02.10',
            'finish_date' => '2011.03.10',
        ],
        [
            'user_id' => '9',
            'company_id' => '3',
            'start_date' => '2010.10.10',
            'finish_date' => '2010.11.10',
        ],
        [
            'user_id' => '9',
            'company_id' => '6',
            'start_date' => '2010.12.10',
            'finish_date' => '2011.01.10'
        ],
        [
            'user_id' => '9',
            'company_id' => '9',
            'start_date' => '2011.02.10',
            'finish_date' => '2011.03.10',
        ],
    ];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->employees as $employee) {
            DB::table('employee')->insert([
                'user_id' => $employee['user_id'],
                'company_id' => $employee['company_id'],
                'start_date' => $employee['start_date'],
                'finish_date' => $employee['finish_date'],
            ]);
        }
    }
}
