<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothe extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'color', 'url', 'description', 'brand_id', 'clothe_category_id'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function clotheCategory()
    {
        return $this->belongsTo(ClotheCategory::class, 'clothe_category_id', 'id');
    }
}
