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
        factory(\App\Models\User::class,60)->create();
        $user = \App\Models\User::find(1);
        $user->email="35649084@qq.com";
        $user->is_admin = 1;
        $user->save();
    }
}
