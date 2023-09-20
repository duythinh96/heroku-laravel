<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'Member',
        ]);

        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'Artisan',
        ]);

        DB::table('roles')->insert([
            'id' => 3,
            'name' => 'Supporter',
        ]);

        DB::table('roles')->insert([
            'id' => 4,
            'name' => 'Developer',
        ]);

        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Supper Admin',
            'email' => 'admin.n96@gmail.com',
            'password' => Hash::make('duythinh'),
            'role' => 0,
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Duy Thinh',
            'email' => 'dthinh.n96@gmail.com',
            'password' => Hash::make('duythinh'),
            'role' => 1,
        ]);
    }
}
