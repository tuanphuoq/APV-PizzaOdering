<?php 
namespace App\Services;

use Illuminate\Support\Facades\Storage;
use App\Topping;

class ToppingService{
	public static $disk = 'public';
	public static $three = 3;
	public function createTopping($req)
	{
		$dataTopping = array();
		$dataTopping['name'] = $req->input('name');
		$dataTopping['price'] = $req->input('price');
		$imageFile = $req->image;
		$extend = $req->image->extension();

		$dataTopping['image'] = $this->storeImage($imageFile, $extend);

		try{
			Topping::create($dataTopping);
		}
		catch(Exception $e){
			return $e->getMessage();
		}
		return true;
	}

	public function storeImage($file, $extend)
	{
		return $file->storeAs('images','topping-'.time().'.'.$extend,self::$disk);
	}

	public function deleteToppingById($id)
	{
		$topping=Topping::find($id);
		if ($topping != null) {
			try{
				$topping->delete();
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
		$topping=Topping::find($id);
		if ($topping != null) {
			Storage::delete(self::$disk.$topping->image, $topping->image);
			return true;
		}
		else{
			return false;
		}
	}

	public function getToppingById($id){
		$topping=Topping::find($id);
		if ($topping != null) {
			return $topping;
		}
		else{
			return null;
		}
	}

	public function getTopping()
	{
		return Topping::get();
	}

	public function saveTopping($req, $id)
	{
		$data = array();
		$data['name'] = $req->input('name');
		$data['price'] = $req->input('price');
		$topping = Topping::find($id);
		if ($topping != null) {
			if ($topping->name != $data['name']) {
				$topping->name = $data['name'];
			}
			if ($topping->price != $data['price']) {
				$topping->price = $data['price'];
			}
			$topping->save();
			return true;
		}
		else{
			return false;
		}
	}

	public function checkExistTopping($id)
	{
		if (Topping::find($id) != null) {
			return true;
		}
		else{
			return false;
		}
	}

	public function getThreeTopping(){ 
		$maybeTopping = Topping::paginate(self::$three);
		$data = array();
		foreach ($maybeTopping as $key => $value) {
			$data[$key]['id'] = $value->id;
			$data[$key]['name'] = $value->name;
			$data[$key]['price'] = $value->price;
			$data[$key]['image'] = $value->image;
		}

		return $data;
	}

	public function changeImage($req, $id)
	{
		$imageFile = $req->image;
		if ($imageFile != null) {
			try{
				$topping=Topping::find($id);
				Storage::delete(self::$disk.$topping->image, $topping->image);
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
		$topping = Topping::find($id);
		if ($topping != null) {
			$topping->image = $path;
			$topping->save();
		}
	}

	

}

?>