<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    

    public function dorogis(){
        return $this->HasMany(Dorogi::class);
    }
}
