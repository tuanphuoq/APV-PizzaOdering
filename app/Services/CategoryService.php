<?php 
namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Category;

class CategoryService{
	public function createCategory($req)
	{
		$dataCategory = array();
		$dataCategory['title'] = $req->input('title');
		$dataCategory['description'] = $req->input('description');
		$imageFile = $req->image;
		$extend = $req->image->extension();

		$dataCategory['image'] = $this->storeImage($imageFile, $extend);

		try{
			$category = Category::create($dataCategory);
		}
		catch(Exception $e){
			return $e->getMessage();
		}
		return true;
	}

	public function storeImage($file, $extend)
	{
		$disk = 'public';
		return $file->storeAs('images','category-'.time().'.'.$extend, $disk);
	}

	public function deleteCategoryById($id)
	{
		$category=Category::find($id);
		if ($category != null) {
			try{
				$category->delete();
			}catch(Exception $e){
				return $e->getMessage();
			}
			return true;

		}
		else{
			return false;
		}
	}
	public function deleteImage($id)
	{
		$category=Category::find($id);
		if ($category != null) {
			$disk = "public/";
			Storage::delete($disk.$category->image, $category->image);
			return true;
		}
		else{
			return false;
		}
	}

	public function getCategoryById($id){
		$category=Category::find($id);
		if ($category != null) {
			return $category;
		}
		else{
			return null;
		}
	}

	public function getCategory()
	{
		return Category::get();
	}

	public function saveCategory($req, $id)
	{
		$data['title'] = $req->input('title');
		$data['description'] = $req->input('description');
		$category = Category::find($id);
		if ($category != null) {
			if ($category->title != $data['title']) {
				$category->title = $data['title'];
			}
			if ($category->description != $data['description']) {
				$category->description = $data['description'];
			}
			$category->save();
			return true;
		}
		else{
			return false;
		}
	}

	public function checkExistCategory($id)
	{
		if (Category::find($id) != null) {
			return true;
		}
		else{
			return false;
		}
	}

	public function getThreeCategory(){ 
		$maybeCategory = Category::paginate(3);
		$data = array();
		foreach ($maybeCategory as $key => $value) {
			$data[$key]['id'] = $value->id;
			$data[$key]['title'] = $value->title;
			$data[$key]['description'] = substr($value->description, 0,30);
			$data[$key]['image'] = $value->image;
		}

		return $data;
	}

	public function changeImage($req, $id)
	{
		$imageFile = $req->image;
		if ($imageFile != null) {
			try{
				$category=Category::find($id);
				Storage::delete('public/'.$category->image, $category->image);
				$extend = $req->image->extension();
				$path = $this->storeImage($imageFile, $extend);
				$this->saveImage($id, $path);
			}catch(Exception $e){
				return $e->getMessage();
			}
			return true;
		}
		else{
			return false;
		}
	}

	public function saveImage($id, $path)
	{
		$category = Category::find($id);
		if ($category != null) {
			$category->image = $path;
			$category->save();
		}
	}

	

}

?>