<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table = 'genres';

    protected $fillable = [
        'genre_name',
        'genre_status',
    ];

    protected $primaryKey = 'genre_id';

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function categories(){
        return $this->belongsTo(Category::class);
    }
}
