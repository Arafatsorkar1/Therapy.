<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $table = "sub_categories";
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class,'categories_id');
    }

    public function sub_categories_id()
    {
        return $this->hasMany(Question::class,'sub_categories_id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class,'sub_categories_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class,'sub_categories_id');
    }
}
