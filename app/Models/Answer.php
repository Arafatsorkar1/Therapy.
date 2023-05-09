<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $table ='answers';
    protected $guarded =['id'];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class,'sub_categories_id');
    }
}
