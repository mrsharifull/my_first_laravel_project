<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCatModel extends Model
{
    use HasFactory;
    protected $table = 'subcategories';
    function catSubCat()
    {
        return $this->belongsTo(CatModel::class, 'category_id');
    }
}