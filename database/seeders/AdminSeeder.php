<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('admins')->insert([
            ['nama' => 'admin', 
            'username' => 'admin', 
            'password' => Hash::make('admin')],
        ]);
    }
}
