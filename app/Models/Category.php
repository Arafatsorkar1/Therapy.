<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='categories';
    protected $guarded =['id'];

    public function categoryType()
    {
        return $this->belongsTo(CategoryType::class,'category_types_id');
    }

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class,'categories_id');
    }

    public function userAssessments()
    {
        return $this->hasMany(UserAssessment::class,'categories_id');
    }

    public function assessmentOrders()
    {
        return $this->hasMany(AssessmentOrder::class,'categories_id');
    }
}
