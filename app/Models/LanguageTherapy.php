<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageTherapy extends Model
{
    use HasFactory;
    protected $table ='language_therapies';
    protected $guarded =['id'];

    public function user()
    {
        return $this->belongsTo(User::class,'users_id');
    }

    public function category()
    {
        return $this->belongsTo(LanguageCategory::class,'language_categories_id');
    }
}
