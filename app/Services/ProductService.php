<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Category_Product;
use App\Size;
use App\Topping;
use DB;

/**
 * 
 */
class ProductService
{
	public function createProduct($req)
	{
		$dataProduct = array();
		$dataProduct['name'] = $req->input('inputProductName');
		$dataProduct['price'] = $req->input('inputPrice');
		$dataProduct['description'] = $req->input('inputDescription');
		$dataProduct['tag'] = $req->input('inputProductTag');
		$imageFile = $req->inputImage;
		$extend = $req->inputImage->extension();

		//store image into public/images
		$dataProduct['image'] = $this->storeImage($imageFile, $extend);

		//get categories value as a string
		$category = implode(',', $req->input('inputCategory'));
		$categoryArr = $this->getArrayCategories($category);
		try{
			//create product
			$product = Product::create($dataProduct);
			//create category-product
			$this->addCategoryProduct($categoryArr, $product->id);
			return true;
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function getAllCategory()
	{
		return Category::get();
	}

	public function getArrayCategories($data)
	{
		$arr = array();
		$temp = str_split($data, 1);
		for ($i=0; $i < count($temp) ; $i++) { 
			if ($temp[$i] != ',') {
				array_push($arr, $temp[$i]);
			}
		}
		return $arr;
	}

	public function storeImage($file, $extend)
	{
		$disk = 'public';
		return $file->storeAs('images','product-'.time().'.'.$extend, $disk);
	}

	public function addCategoryProduct($categoryArr, $productId)
	{
		foreach ($categoryArr as $key => $value) {
			$data['category_id'] = $value;
			$data['product_id'] = $productId;
			Category_Product::Create($data);
		}
	}

	public function delProductById($id)
	{
		if (Product::find($id) != null) {
			try{
				Product::find($id)->delete();
				Category_Product::deleteItem($id);
				return true;
			}catch(Exception $e){
				return $e->getMessage();
			}
		}
		else{
			return false;
		}
		// try{
		// 	Product::findOrFail($id);
		// }catch(ModelNotFoundException $exception){
		// 	return back()->withError($exception->getMessage())->withInput();
		// }
		// Product::find($id)->delete();
		// Category_Product::delProdInCate($id);
		// return null;
	}

	public function deleteImage($id)
	{
		$product=Product::find($id);
		if ($product != null) {
			$disk = "public/";
			Storage::delete($disk.$product->image, $product->image);
			return true;
		}
		else{
			return false;
		}
	}

	public function getProductById($id){
		if (Product::find($id) != null) {
			return Product::find($id);
		}
		else{
			return null;
		}
	}

	public function getProduct()
	{
		return Product::get();
	}

	public function changeImage($req, $id)
	{
		$imageFile = $req->inputImage;
		if ($imageFile != null) {
			try{
				$product=Product::find($id);
				Storage::delete('public/'.$product->image, $product->image);
				$extend = $req->inputImage->extension();
				$path = $this->storeImage($imageFile, $extend);
				$this->saveImage($id, $path);
				return true;
			}catch(Exception $e){
				return $e->getMessage();
			}
		}
		else{
			return false;
		}
	}

	public function saveImage($id, $path)
	{
		$product = Product::find($id);
		if ($product != null) {
			$product->image = $path;
			$product->save();
		}
	}

	public function saveProduct($req, $id)
	{
		$data['name'] = $req->input('inputProductName');
		$data['price'] = $req->input('inputPrice');
		$data['description'] = $req->input('inputDescription');
		$data['tag'] = $req->input('inputProductTag');

		$product = Product::find($id);
		if ($product != null) {
			if ($product->name != $data['name']) {
				$product->name = $data['name'];
			}
			if ($product->price != $data['price']) {
				$product->price = $data['price'];
			}
			if ($product->description != $data['description']) {
				$product->description = $data['description'];
			}
			if ($product->tag != $data['tag']) {
				$product->tag = $data['tag'];
			}
			$product->save();
			return true;
		}
		else{
			return false;
		}
	}

	public function checkExistProduct($id)
	{
		if (Product::find($id) != null) {
			return true;
		}
		else{
			return false;
		}
	}

	public function saveCategoryProduct($req, $id)
	{
		//get categories value as a string
		$category = $req->input('inputCategory');
		$category = implode(',', $category);
		$categoryArr = $this->getArrayCategories($category);
		
		//save a Category_Products record
		try{
			if (Category_Product::deleteItem($id)) {
				foreach ($categoryArr as $key => $value) {
					$data['category_id'] = $value;
					$data['product_id'] = $id;
					Category_Product::Create($data);
				}
				return true;
			}
			else return false;
		}catch(Exception $e){
			return $e->getMessage();
		}	
	}


	/**
	*
	get get product detail, output return array detail product when passing into id
	@param product_id
	@return array  

	*/
	public function getProductDetail($id){ 
		$product = Product::find($id);
			//check isset data product
		if($product == null){
			return null;
		}
		else{
			$data = array();
			$data['product'] = $product;
			$data['sizes'] = Size::all();
			$data['topping'] = Topping::all();
			$categoryProduct = Category_Product::where('product_id', $id)->get();
			if(count($categoryProduct) == 0){
				return $data;
			}
			else{
				foreach ($categoryProduct as $key => $value) {
					$category[$key] = Category::where('id', $value->category_id)->first()->title;
				}
				$data['category'] = $category;
				return $data;
			}
		}

	}

	/**
	*
	get 3 products, output return array 3 products
	@param
	@return array  

	*/
	public function getThreeProduct(){ 
		$maybeProduct = Product::paginate(3);
		$data = array();
		foreach ($maybeProduct as $key => $value) {
			$data[$key]['id'] = $value->id;
			$data[$key]['name'] = $value->name;
			$data[$key]['description'] = substr($value->description, 0,30);
			$data[$key]['image'] = $value->image;
			$data[$key]['price'] = $value->price;
			$data[$key]['tag'] = $value->tag;
		}

		return $data;
	}


	// public function all()

 //    {
 //        $products = DB::table('products')->select('products.name' ,'products.price', 'products.image', 'products.description', 'products.tag')->get();

 //        return $products;
 //    }

    public function list()

    {
        $products = DB::table('products')->select('products.id', 'products.name' ,'products.price', 'products.image', 'products.description', 'products.tag')->get();

        return $products;
    }
}
