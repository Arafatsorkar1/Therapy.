<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllOrder extends Model
{
    use HasFactory;
    protected $table ='all_orders';
    protected $guarded=['id'];

    public function category()
    {
        return $this->belongsTo(Category::class,'order_type_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'users_id');
    }

    public function orderTraning()
    {
        return $this->belongsTo(Traning::class,'order_type_id');
    }
    public function orderTherapy()
    {
        return $this->belongsTo(LanguageTherapy::class,'order_type_id');
    }
    public function orderTest()
    {
        return $this->belongsTo(Test::class,'order_type_id');
    }
    public function orderService()
    {
        return $this->belongsTo(Service::class,'order_type_id');
    }



}
