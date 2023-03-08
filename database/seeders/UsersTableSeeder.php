<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfUsers = \DB::table('users')->count();

        if($numberOfUsers == 0)
        {
            DB::table('users')->insert([
                'role_id' => '1',
                'name' => 'Admin',
                'email' => 'admin@test.com',
                'mobile' => '1234567891',
                'password' => bcrypt('test1234'),
                'avatar' => '',
                'email_verified_at' => carbon::now(),
                'created_at' => carbon::now(),
                'updated_at' => carbon::now()
            ]);

            DB::table('users')->insert([
                'role_id' => '2',
                'name' => 'Seller',
                'email' => 'seller@test.com',
                'mobile' => '1234567892',
                'password' => bcrypt('test1234'),
                'avatar' => '',
                'email_verified_at' => carbon::now(),
                'created_at' => carbon::now(),
                'updated_at' => carbon::now()
            ]);

            DB::table('users')->insert([
                'role_id' => '3',
                'name' => 'Customer',
                'email' => 'customer@test.com',
                'mobile' => '1234567893',
                'password' => bcrypt('test1234'),
                'avatar' => '',
                'email_verified_at' => carbon::now(),
                'created_at' => carbon::now(),
                'updated_at' => carbon::now()
            ]);
        }
    }
}
