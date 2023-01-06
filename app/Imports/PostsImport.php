<?php

namespace App\Imports;

use App\Models\Dorogi;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class PostsImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach($collection as $item){
            if(isset($item['title']) && $item['title'] != null){
                Dorogi::firstOrCreate([
                    'title' => $item['title'],
                    'content' => $item['content'],
                    'price' => $item['price'],
    
                ]);
            }
        }
        
    }
}
