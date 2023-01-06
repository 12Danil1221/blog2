<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;
use App\Models\Dorogi;

use App\Console\Commands\ImportDataClient;


class ImportJsonPlaceholderCommand extends Command
{

    protected $signature = 'import:jsonplaceholder';

    protected $description = 'Get data from jsonplaceholder';


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new Client(['base_uri' => 'https://jsonplaceholder.typicode.com/']);
        $response = $client->request('GET', 'posts');

        $data = json_decode($response->getBody()->getContents());

        foreach($data as $item){
            Dorogi::firstOrCreate([
                'title' => $item->title

            ],[
                'title' => $item->title,
                'content' => $item->body,
                'price' => 1000,
            ]);
        }

        dd('finish');
    }
}
