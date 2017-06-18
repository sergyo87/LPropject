<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('categories')->insert([
           'name' => 'Nueva',
           'created_at' => date("Y-m-d"),
           'updated_at' => date("Y-m-d")
       ]);
    }
}
