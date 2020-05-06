<?php

namespace App\Http\Controllers;
use App\Services\OrderService;
use Illuminate\Http\Request;
use App\Services\CartService;
use App\Http\Requests\StoreOrderRequest;

class OrderController extends Controller

{	
	public function __construct(CartService $cartService, OrderService $orderService){
		$this->cartService = $cartService;
        $this->orderService = $orderService;
    }
    public function viewCart(){
    	return view('store.cart');
    }

    public function addcart(Request $request){
    	return $this->cartService->addToCart($request);

    }

    public function destroyItems($id){
    	return $this->cartService->removeItems($id);
    }

    public function view()
    {
        $orders = $this->orderService->orderList();
        return view('pages.viewOrder')->with(compact('orders'));
    }


    public function changeState(Request $req)
    {
        if($this->orderService->changeOrderState($req)){
            return response()->json([
                'message' => 'true'
            ]);
        }else {
            return response()->json([
                'message' => 'false'
            ]);
        }
    }

    public function storeOrder(StoreOrderRequest $request){
        $order = $this->orderService->addOrder($request);
        return response()->json([
            'error' => false,
            'data'=>$order
        ]);
    }
}
