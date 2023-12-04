<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function brands()
    {
        return $this->belongsTo(Brand::class, 'brand', 'id')->select('id','brand_name as brand');
    }
}
