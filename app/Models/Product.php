<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'product_name',
        'product_image',
        'product_price',
        'product_promotion',
        'product_content',
        'product_status',
    ];

    protected $primaryKey = 'product_id';

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function genres(){
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function publishers(){
        return $this->belongsTo(Publisher::class, 'publisher_id');
    }

    public function suppliers(){
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    public function authors(){
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function orders(){
        return $this->hasMany(Order::class, 'order_id');
    }

    public function orderdetails(){
        return $this->belongsTo(OrderDetail::class, 'orderdetail_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'com_id');
    }

}
