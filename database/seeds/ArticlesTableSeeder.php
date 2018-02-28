<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        https://stackoverflow.com/questions/30492227/is-it-possible-to-prevent-laravel-running-model-events-when-the-database-is-bein
        \App\Models\Article::flushEventListeners();
        factory(\App\Models\Article::class,60)->create();
    }
}
