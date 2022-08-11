<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'desc',
        'image',
        'price',
    ];
    // public function jobs(){
    //     return $this->hasMany(JobApply::class);
    // }
}
