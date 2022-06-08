<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=> 'sumon',
                'email'=> 'sumon@demo.com',
                'password'=> bcrypt('12345'),
                'role_id'=>'1',
            ],
            [
                'name'=> 'zami',
                'email'=> 'zami@demo.com',
                'password'=> bcrypt('13579'),
                'role_id'=>'2',
            ],
            [
                'name'=> 'selina',
                'email'=> 'selina@demo.com',
                'password'=> bcrypt('24680'),
                'role_id'=>'3',
            ],
        ];
        foreach ($user as $key => $value) {
            # code...
            User::create($value);
        }
    }
}
