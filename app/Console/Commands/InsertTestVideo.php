<?php

namespace App\Console\Commands;

use App\Models\Lesson;
use App\Models\Series;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class InsertTestVideo extends Command
{

    protected $client;

    protected $currentUrl;
    protected $maxCount = 100;
    protected $currentCount = 0;

    protected $currentSeries = 1;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'series:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get test video from open 163';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->client = new Client();
        $this->currentUrl = "https://c.open.163.com/mob/MDD4I6ANA/getMoviesForIpad.do";
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $this->info('系列获取中');
        $this->getSeries();
        $this->info('系列获取完成');

        $this->info('视频获取中');
        $this->getLessons();
        $this->info('视频获取完成');

    }

    protected function getSeries(){
        $request = $this->client->get($this->currentUrl);

        $result = $request->getBody();
        $dataList = json_decode($result,true)['data']['recommendList'];

        foreach ($dataList as $item){

            $series = Series::query()->find($this->currentSeries);

            $fields = [
                'skill_id' => \App\Models\Skill::pluck('id')->random(),
                'user_id' => 1,
                'title' => $item['title'],
                'slug' => $item['plid'],
                'banner' => $item['picUrl'],
                'body' => $item["description"]
            ];
            $series ? $series->update($fields) : $series->create($fields);

            $this->currentSeries ++;

        }

        if (count($dataList) <= 0){
            return;
        }

        $this->currentCount += count($dataList);

        $randomItem = array_random($dataList,1)[0];
        if ($this->currentCount < $this->maxCount){
            $this->currentUrl = "https://c.open.163.com/mob/{$randomItem['plid']}/getMoviesForIpad.do";
            sleep(2);
            $this->getSeries();
        }

    }

    protected function getLessons(){

        $series = Series::query()->where('slug','!=',null)->get();


        foreach ($series as $item){

            $this->currentUrl = $this->getUrl($item->slug);
            $request = $this->client->get($this->currentUrl);
            $result = $request->getBody();
            $datas = json_decode($result,true)['data']['videoList'];
            $data = $datas[0];
            $videoUrl = $data['mp4ShdUrl'];
            $item->lessons()->update(['video_url' => $videoUrl]);
            sleep(1);
        }

    }

    private function getUrl($pid){
        return "https://c.open.163.com/mob/{$pid}/getMoviesForIpad.do";
    }
}
