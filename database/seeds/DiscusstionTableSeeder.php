<?php

use Illuminate\Database\Seeder;

class DiscusstionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Discussion::class,60)->create();

    }
}
