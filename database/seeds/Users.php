<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'=> 'Mustafa',
            'email' => 'm@admin.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
