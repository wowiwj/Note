<?php

use Illuminate\Database\Seeder;

class MakeDiscussionSolvedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $discussions = \App\Models\Discussion::query()->whereHas('comments')->inRandomOrder()->get();
        $generateCount = $discussions->count() * 0.3;

        for ($i = 0;$i < $generateCount;$i++){
            $discussion = $discussions[$i];
            $bestAnswer = $discussion->comments()->inRandomOrder()->first();
            $discussion->solved_id = $bestAnswer->id;
            $discussion->save();

        }
    }
}
