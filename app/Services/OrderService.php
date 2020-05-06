<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Size;
use App\User;
use App\Order_Topping;
use App\Order_Detail;
use App\Order_Address;
use App\Topping;
use Gloudemans\Shoppingcart\Facades\Cart;
/**
* 
*/
class OrderService
{
	//variables constant of state
	const DELIVERING = "Delivering";
	const DELIVERED = "Delivered";
	const CANCEL = "Canceled";

	/**
	* [getTotalPrice description] get total price product from order_detail table
	* @param  [type] $id [id of order_detail table]
	* @return [int]  $total   [ total price]
	*/
	public function getTotalPrice($id)
	{
		if(Order_Detail::findOrFail($id)) {
			$quantity = Order_Detail::where('id', $id)->value('quantity');
			$priceSize = Order_Detail::where('id', $id)->value('size_price');
			$priceProdct = Order_Detail::where('id', $id)->value('product_price');
			$tax = 0.1;
			$toppingList = Order_Topping::where('order_detail_id', $id)->get('topping_id');
			$toppingPrice = 0;
			if ($toppingList != null) {
				foreach ($toppingList as $key => $value) {
					$item = Topping::where('id', $value->topping_id)->value('price');
					$toppingPrice = $toppingPrice + $item;
				}
			}
			//return total + total*tax
			return ($priceSize + $priceProdct + $toppingPrice)*$quantity
			+ (($priceSize + $priceProdct + $toppingPrice)*$quantity)*$tax;
		}
		else {
			return null;
		}
	}

	public function addColumn($object, $colName ,$value)
	{
		$object[$colName] = $value;
	}

	/**
	 * [orderList description]
	 * @return [type] [return order list]
	 * add info columns to return order list 
	 */
	public function orderList()
	{ 
		if ($orderList = Order_Detail::count() != 0) {
			$orderList = Order_Detail::all();
			foreach ($orderList as $key => $value) {
				$orders[$key] = Order_Detail::where('id',$value->id)->first();
				//add product name column
				$nameProduct = Product::where('id', $value->product_id)->first()->name;
				$colName = "name_product";
				$this->addColumn($orders[$key], $colName, $nameProduct);
				//add phone number column
				$colName = "phone";
				if (Order_Detail::where('id', $value->id)->first()->user_id != 0) {
					$phone = User::where('id', $value->user_id)->first()->phone;
					$this->addColumn($orders[$key], $colName, $phone);
				}else {
					$phone = Order_Address::where('id', $value->order_address_id)->first()->phone;
					$this->addColumn($orders[$key], $colName, $phone);
				}
				//add address order
				$orders[$key]['address'] = $this->getAddress($value->id);
				//add customer name column
				$colName = "name_user";
				if (Order_Detail::where('id', $value->id)->first()->user_id != 0) {
					$nameUser = User::where('id', $value->user_id)->first()->name;
					$this->addColumn($orders[$key], $colName, $nameUser);
				}else {
					$nameUser = Order_Address::where('id', $value->order_address_id)->first()->name;
					$this->addColumn($orders[$key], $colName, $nameUser);
				}
				//add size name column
				$nameSize = Size::where('id', $value->size_id)->first()->name;
				$colName = "name_size";
				$this->addColumn($orders[$key], $colName, $nameSize);
				//add toppings column
				$toppings[$value->id] = Order_Topping::where('order_detail_id', $value->id)->get('topping_id');
				$colName = "topping";
				$this->addToppingCol($orders[$key], $colName, $toppings, $toppings[$value->id]);
				//add price total column
				$orders[$key]['total'] = $this->getTotalPrice($value->id);
				//add order state column
				$orders[$key]['state'] = $this->getState($value->status);
			}
			return $orders;
		}else {
			return null;
		}
	}

	/**
	 * [addToppingCol description]
	 * Add column topping to $object from an array value ($arr) by away :
	 * + Add once value and concatenation it be a chain in sub array ($subArr) into $object[$colName] via tow loops foreach
	 * @param  [type] $boject [object to set value from array ]
	 * @param  [type] $colName [Column name insert value ]
	 * @param  [type] $arr [Array containing sub arrays ]
	 * @param  [type] $subArr [Sub Array containing values to concatenate and insert Object[colName] ]
	 * @return Object[colName] contain values are inserted from array
	 */
	public function addToppingCol($object, $colName, $arr, $subArr)
	{
		foreach ($arr as $key => $value) {
			$list = "";
			foreach ($subArr as $key1 => $value1) {
				$item = Topping::where('id', $value1->topping_id)->value('name');
				$list === "" ? $list = $list.$item : $list = $list.", ".$item;
			}
			$object[$colName] = $list;
		}
	}

	public function getState($id)
	{
		switch ($id) {
		    case 1:
		        return self::DELIVERING;
		        break;
		    case 2:
		        return self::DELIVERED;
		        break;
		    case 3:
		        return self::CANCEL;
		        break;
		    default:
		        return null;
		}
	}


	/**
	 * [getAddress description]
	 * @param  [type] $id [input $id of table(order_address_id) ]
	 * @return [type] $address
	 */
	public function getAddress($id)
	{
		$value = Order_Detail::find($id)->order_address_id;
		if ($value != 0) {
			$street = Order_Address::where('id', $value)->value('street_address');
			$city = Order_Address::where('id', $value)->value('city');
		}else {
			$value1 = Order_Detail::find($id)->user_id;
			$street = User::where('id', $value1)->value('street_address');
			$city = User::where('id', $value1)->value('city');
		}
		return $street.", ".$city;
	}

	/**
	* [changeState description]
	* @param  [type] $id    [$id of order_detail]
	* @param  [type] $state [$state of order_detail]
	* @return [type]        [return true for succes, false for fail]
	*/
	public function changeOrderState($req)
	{
		$order = Order_Detail::find($req->id);
		if ($order) {
			$order->status = $req->state;
			$order->save();
			return true; 
		}else {
			return false;
		}
	}

	/**
	* [addOrder description]
	* @param  [type] $id    [$param]
	* @return [type]        [return object, destroy cart]
	*/
	public function addOrder($param){
		$data = $param->all();
		$data['name'] = $param->firstName.' '.$param->lastName;
		$carts = Cart::content();
		$dataCart = $this->dataCart($carts);
		if(Auth::user()==null){
			$userId = 0;
			$order_address=Order_Address::create($data);
			$dataCart['user_id'] = $userId;
			$dataCart['order_address_id'] = $order_address->id;
			$order = Order_Detail::create($dataCart);
		}else{
			$userId = Auth::user()->id;
			$address = 0;
			User::find($userId)->update($data);
			$dataCart['user_id'] = $userId;
			$dataCart['order_address_id'] = $address;
			$order = Order_Detail::create($dataCart);
		}
		foreach ($carts as  $cart) {
			if($cart->options->dataToppingId){
				foreach ($cart->options->dataToppingId as $key => $value) {
					Order_Topping::create([
						'order_detail_id'=>$order->id,
						'topping_id'=>$value
					]);
				}
			}
		}
		Cart::destroy();
	}

	/**
	* [dataCart description]
	* @param  [type]  ]
	* @return [type] $data
	*/
	public function dataCart($carts){
		$data = array();
		$status = 1;
		foreach ($carts as $cart){
			$data['product_id']=$cart->options->productId;
			$data['quantity']=$cart->qty;
			$data['size_id']=$cart->options->sizeId;
			$data['size_price']=$cart->options->sizePrice;
			$data['product_price']=$cart->options->productPrice;
			$data['status']= $status;
		}
		return $data;
	}
}