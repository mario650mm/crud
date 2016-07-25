<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mario Muñoz',
            'email' => 'mario650m@gmail.com',
            'password' => bcrypt('secret'),
            'type' => 'admin'
        ]);
    }
}
