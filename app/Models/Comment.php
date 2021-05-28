<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'commemts';

    protected $primaryKey = 'com_id';

    public $timestamps = true;

    protected $fillable = [
        'com_name',
        'com_email',
        'com_content',
        'com_product',
    ];

    public function products(){
        return $this->belongsTo(Product::class, 'com_product');
    }
}
