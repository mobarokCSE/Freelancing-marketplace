<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApply extends Model
{
    use HasFactory;
    protected $guarded = [];
    // public function sellers()
    // {
    //     return $this->hasMany(Seller::class);
    // }
    // public function seller(){
    //     return $this->belongsTo(Seller::class,'id','seller_id');
    // }
    // public function buyers()
    // {
    //     return $this->hasMany(Buyer::class);
    // }
}
