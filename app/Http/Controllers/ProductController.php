<?php
namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;
use Session;



class ProductController extends Controller
{
	public function __construct(ProductService $productService)
	{
		$this->productService = $productService;
	}

	public function viewadd()
	{
		$data = $this->productService->getAllCategory();
		return view('pages.addProduct')->with(compact('data'));
	}

	public function editProduct(Request $req, $id)
	{
		if ($this->productService->checkExistProduct($id)) {
			// save Product
			$this->productService->saveProduct($req, $id);

			//store image into public/images if have a change
			$this->productService->changeImage($req, $id);
			$this->productService->saveCategoryProduct($req, $id);

			//return a message
			Session::flash('message', 'Update product successful');

			//redirect to product list
			return redirect()->route('product');
		}
	}

	public function viewedit($id)
	{
		$product = $this->productService->getProductById($id);
		if ($product != null) {
			$data = $this->productService->getAllCategory();
			return view('pages.editProduct')->with(compact('data'))->with(compact('product'));
		}
		else{
			return view('store.404');
		}
	}

	public function addProduct(Request $req)
	{
		if ($this->productService->createProduct($req)) {
			//return a message
			Session::flash('message', 'Add product successful');

			//redirect to product list
			return redirect()->route('product');
		}
		else{
			return view('store.404');
		}
	}

	public function delete($id)
	{
		if ($this->productService->checkExistProduct($id)) {
			$this->productService->delProductById($id);
			$this->productService->deleteImage($id);
		}
	}

	public function view()
	{
		$data = $this->productService->getProduct();
		return view('pages.viewProduct')->with(compact('data'));
	}


	public function show($id){
		$data = $this->productService->getProductDetail($id);
		if($data==null){
			return view('store.404');
		} 
		else{
			$maybe = $this->productService->getThreeProduct();
			return view('store.product-detail', compact('data'), compact('maybe'));
		}
	}

   // public function index(){

   //      $products = $this->productService->all();

   //      // dd($products);
   //      return view("test", ['products'=>$products]);
   //  }

    public function list(){

        $products = $this->productService->list();

        // dd($products);
        return view("layouts.menu", ['products'=>$products]);
    }

}

