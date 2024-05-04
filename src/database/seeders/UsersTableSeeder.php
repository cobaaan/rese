<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {        
        $param = [
            'name' => '千葉真一',
            'email' => 'sunnychiba@samurai.example',
            'password' => 'sunnysamurai',
        ];
        DB::table('users')->insert($param);
    }
}
