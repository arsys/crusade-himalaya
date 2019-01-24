<?php

namespace App\Console\Commands;

use App\Insta;
use Vinkla\Instagram\Instagram;
use Illuminate\Console\Command;
class FetchInstagram extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Instagram:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch instagram post from instagram and save only unique only in db.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $instagram = new Instagram('9206517006.1677ed0.68ddd01c5ff942e8aa0587a75a1f0579');
        $posts = $instagram->media(); //gets 20 latest insta posts of a user
        // dd($posts);
        $fromDBs = Insta::orderBy('id', 'desc')->take(20)->get(); //get last 20 rows from table
        foreach( $posts as $post)
        {
            Insta::firstOrCreate([
                'thumb_link' => $post->images->thumbnail->url  ,
                'standard_link' => $post->images->standard_resolution->url  ,
                'caption' => $post->caption->text
            ]);
        }
    }
}
