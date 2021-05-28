<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    protected $fillable = [
        'publisher_name',

    ];

    protected $primaryKey = 'publisher_id';

    public function products(){
        return $this->hasMany(Product::class);
    }
}
