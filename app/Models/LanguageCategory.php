<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageCategory extends Model
{
    use HasFactory;
    protected $table ='language_categories';
    protected $guarded =['id'];
}
