<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerOrder extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function seller()
{
    return $this->hasOne(User::class,'seller_id');
}
    public function buyer()
{
    return $this->hasMany(User::class,'buyer_id');
}
}
