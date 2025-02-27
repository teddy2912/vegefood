<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'status', 'user_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function orderDetails(){
        return $this->hasMany(OderDetail::class);
    }
}
