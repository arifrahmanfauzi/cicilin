<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

class ScrapsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scraper:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'start scrapeer';

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
        $client = new Client();

        $crawler = $client->request('GET', 'https://www.tokopedia.com/');
        $crawler = $client->click($crawler->selectLink('Sign in')->link());
        $crawler->selectButton('submit')->link();


        $crawler->filter('IKo3_')->each(function ($node) {
            print $node->text()."\n";
        });
    }
}
