<?php

namespace Database\Seeders;
use App\Models\User;

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
        User::create(
            [
                'name'=>'Sifat',
                'email'=>'sifat1@gmail.com',
                'password'=>bcrypt('12346'),
                'mobile'=>'01727265497',
                'role'=>'admin'
              
            ]
        );
    }
}
