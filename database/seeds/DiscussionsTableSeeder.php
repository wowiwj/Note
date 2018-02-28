<?php

use Illuminate\Database\Seeder;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Discussion::flushEventListeners();
        factory(\App\Models\Discussion::class,60)->create();
    }
}
