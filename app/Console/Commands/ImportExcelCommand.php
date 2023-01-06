<?php

namespace App\Console\Commands;

use App\Imports\PostsImport;
use Illuminate\Console\Command;
use GuzzleHttp\Client;
use App\Models\Dorogi;
use Maatwebsite\Excel\Facades\Excel;

use App\Console\Commands\ImportDataClient;


class ImportExcelCommand extends Command
{

    protected $signature = 'import:excel';

    protected $description = 'Get data from excel';


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        ini_set('memory_limit', '-1');
        Excel::import(new PostsImport(), public_path('excel/posts.xlsx'));

        dd('finish');
    }
}
