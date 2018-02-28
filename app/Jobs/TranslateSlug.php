<?php

namespace App\Jobs;

use App\Base\Handler\SlugTranslateHandler;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;

class TranslateSlug implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected $translate;
    protected $field;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($translate,$field)
    {
        $this->translate = $translate;
        $this->field = $field;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $field = $this->field;
        $slug = app(SlugTranslateHandler::class)->translate($this->translate->$field);


        DB::table($this->translate->getTable())->where('id', $this->translate->id)->update(['slug' => $slug]);

    }
}
