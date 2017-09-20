<?php

use Illuminate\Database\Seeder;

class SpecialPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        \App\Models\SpecialPage::create([
            'show_nav' => 1,
            'route' => 'about',
            'title' => '关于',
            'body' => '关于界面'
        ]);


        \App\Models\SpecialPage::create([
            'show_nav' => 1,
            'route' => 'message',
            'title' => '留言板',
            'body' => '留言板界面'
        ]);


    }
}
