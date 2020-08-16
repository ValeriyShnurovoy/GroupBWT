<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    private $users = [
        [
            'name' => 'user1',
            'email' => 'a@a.com',
            'pass' => 123
        ],
        [
            'name' => 'user2',
            'email' => 'b@a.com',
            'pass' => 123
        ],
        [
            'name' => 'user3',
            'email' => 'c@a.com',
            'pass' => 123
        ],
        [
            'name' => 'user4',
            'email' => 'd@a.com',
            'pass' => 123
        ],
        [
            'name' => 'user5',
            'email' => 'e@a.com',
            'pass' => 123
        ],
        [
            'name' => 'user6',
            'email' => 'f@a.com',
            'pass' => 123
        ],
        [
            'name' => 'user7',
            'email' => 'g@a.com',
            'pass' => 123
        ],
        [
            'name' => 'user8',
            'email' => 'h@a.com',
            'pass' => 123
        ],
        [
            'name' => 'user9',
            'email' => 'i@a.com',
            'pass' => 123
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->users as $user) {
            DB::table('users')->insert([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => bcrypt($user['pass']),
            ]);
        }
    }
}
