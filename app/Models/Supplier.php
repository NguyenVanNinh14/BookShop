<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_name',

    ];

    protected $primaryKey = 'supplier_id';

    public function products(){
        return $this->hasMany(Product::class);
    }
}
