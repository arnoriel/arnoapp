<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Akun extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Arno',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
            ],
        ];
        foreach($data as $key => $d){
            User::create($d);
        }
    }
}
