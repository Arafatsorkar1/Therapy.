<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TraningOrder extends Model
{
    use HasFactory;
    protected $table = "traning_orders";
    protected $guarded = ['id'];

    public function traning()
    {
        return $this->belongsTo(Traning::class,'tranings_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'users_id');
    }
}
