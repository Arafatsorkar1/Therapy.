<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentOrder extends Model
{
    use HasFactory;

    protected $table = 'assessment_orders';
    protected $guarded =['id'];

    public function category()
    {
        return $this->belongsTo(Category::class,'categories_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'users_id');
    }
}
