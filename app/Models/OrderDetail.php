<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_detail';

    protected $primaryKey = 'orderdetail_id';

    public $timestamps = true;

    protected $fillable = [
        'quantity',
        'product_name',
    ];

    public function products() {
        return $this->hasMany(Product::class, 'product_id');
    }

    public function orders() {
        return $this->belongsTo('App\Models\Order', 'order_id' );
    }
}
