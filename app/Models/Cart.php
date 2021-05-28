<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Cart extends Model
{
    use HasFactory;

    public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($item, $id){
		$giohang = [
            'qty'=> 0,
            'price' => $item->promotional_price ? $item->promotional_price : $item->product_price,
            'item' => $item
        ];
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$giohang = $this->items[$id];
			}
		}
		$giohang['qty']++;
		$giohang['price'] = $item->promotional_price ? $item->promotional_price * $giohang['qty'] : $item->product_price * $giohang['qty'];
		$this->items[$id] = $giohang;
		$this->totalQty++;
		$this->totalPrice += $item->promotional_price ? $item->promotional_price : $item->product_price;
	}
	//xóa 1
	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['price'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}

    //
    public function UpdateItemCart($id, $qty){
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];

        $this->items[$id]['qty'] = $qty;
        $this->items[$id]['price'] = $qty * $this->items[$id]['item']['price'];

        $this->totalQty += $this->items[$id]['qty'];
        $this->totalPrice += $this->items[$id]['price'];
    }

}
