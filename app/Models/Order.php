<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';

    protected $primaryKey = 'order_id';

    public $timestamps = true;

    protected $fillable = [
        'order_name',
        'order_phone',
        'order_note',
        'order_address',
        'order_status',
        'order_method',
        'total_price',

    ];

    public function orderdetails() {
        return $this->hasMany('App\Models\OrderDetail', 'orderdetail_id');
      }

      public function users() {
        return $this->belongsTo('App\Models\User', 'user_id' );
      }
}
