<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedSpecialPagesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $pages = [
            [
                'show_nav' => 1,
                'route' => 'about',
                'title' => '关于',
                'body' => '关于界面'
            ],
            [
                'show_nav' => 1,
                'route' => 'message',
                'title' => '留言板',
                'body' => '留言板界面'
            ]


        ];

        DB::table('special_pages')->insert($pages);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('special_pages')->truncate();
    }
}
