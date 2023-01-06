<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dorogi extends Model
{
    

    protected $guarded = [];
    protected $table = ('dorogis');

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
