<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traning extends Model
{
    use HasFactory;
    protected $table ="tranings";
    protected $guarded =['id'];

    public function traningCategory()
    {
        return $this->belongsTo(TraningCategory::class,'traning_categories_id');
    }

    public function traningOrder()
    {
        return $this->belongsTo(TraningOrder::class,'tranings_id');
    }

}
