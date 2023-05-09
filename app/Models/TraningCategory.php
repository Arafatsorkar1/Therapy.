<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TraningCategory extends Model
{
    use HasFactory;
    protected $table ="traning_categories";
    protected $guarded = ['id'];

    public function tranings()
    {
        return $this->hasMany(Traning::class,'traning_categories_id');
    }
}
