<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(\App\Models\Category::class,60)->create();
        factory(\App\Models\Article::class,60)->create();
        factory(\App\Models\Reply::class,60)->create();
         $this->call(SpecialPageTableSeeder::class);
    }
}
