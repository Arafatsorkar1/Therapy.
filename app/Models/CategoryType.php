<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryType extends Model
{
    use HasFactory;
    protected $table ='category_types';
    protected $guarded =['id'];

    public function categories()
    {
        return $this->hasMany(Category::class,'category_types_id');
    }
}
