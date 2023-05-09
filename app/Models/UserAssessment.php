<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAssessment extends Model
{
    use HasFactory;
    protected $table ='user_assessments';
    protected $guarded =['id'];

    public function user()
    {
        return $this->belongsTo(User::class,'users_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'categories_id');
    }
}
