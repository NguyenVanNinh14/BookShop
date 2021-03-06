<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'category_status',
    ];

    protected $primaryKey = 'category_id';

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function genres(){
        return $this->hasMany(Genre::class);
    }
}
