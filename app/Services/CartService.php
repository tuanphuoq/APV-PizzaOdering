<?php 
namespace App\Services;

use App\Product;
use App\Size;
use App\Topping;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

/**
 * 
 */
class CartService 
{	
	/**
	*
	Add product to cart
	@param request
	@return object  

	*/
	public function addToCart($request){
		$image = Product::where('id', $request->product_id)->first()->image;
		$sizeId = Size::where('price', $request->size_price)->first()->id;
		$sizeName = Size::where('price', $request->size_price)->first()->name;
		$productName = Product::where('id', $request->product_id)->first()->name;
		$total = $request->total;
		if($request->toppings == null){
			$toppingName = null;
			$cart = Cart::add($request->product_id, $productName, $request->quantity, $total,'0', ['sizeId'=>$sizeId, 'sizePrice'=>$request->size_price, 'productPrice'=>$request->product_price,'image'=>$image, 'realPrice'=>$total,'toppingName'=>$toppingName, 'sizeName'=>$sizeName, 'productId'=>$request->product_id]);
			return $cart;
		}
		else{
			
			foreach ($request->toppings as $key => $value) {
				$toppingPrice[$key] = $value['value'];
				$toppingId[$key] = Topping::where('price', $toppingPrice[$key])->first()->id;
				$toppingName[$key] = Topping::where('price', $toppingPrice[$key])->first()->name;
			}
			$cart = Cart::add($request->product_id, $productName, $request->quantity, $total,'0', ['sizeId'=>$sizeId, 'sizePrice'=>$request->size_price, 'productPrice'=>$request->product_price, 'dataToppingId'=>$toppingId, 'image'=>$image,'realPrice'=>$total, 'toppingName'=>$toppingName,'sizeName'=>$sizeName, 'productId'=>$request->product_id]);
			return $cart;
		}
	}

	public function removeItems($id){
		return Cart::remove($id);
	}


}
?>