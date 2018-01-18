<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2018/1/18
 * Time: 下午 04:00
 */
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10).'ching',
            'email' => 's123@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}