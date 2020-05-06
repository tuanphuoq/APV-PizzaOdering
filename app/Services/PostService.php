<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Category_Post;
use App\Category;

/**
 * 
 */
class PostService
{
	public static $disk = 'public';
	public static $three = 3;
	public function createPost($req)
	{
		$dataPost = array();
		$dataPost['title'] = $req->input('title');
		$dataPost['short_desc'] = $req->input('short_desc');
		$dataPost['long_desc'] = $req->input('long_desc');
		$imageFile = $req->image;
		$extend = $req->image->extension();

		$dataPost['image'] = $this->storeImage($imageFile, $extend);

		try{
			Post::create($dataPost);
		}
		catch(Exception $e){
			return $e->getMessage();
		}
		return true;
	}

	public function storeImage($file, $extend)
	{
		return $file->storeAs('images','post'.time().'.'.$extend,self::$disk);
	}

	public function deletePostById($id)
	{
		$post=Post::find($id);
		if ($post != null) {
			try{
				$post->delete();
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
		$post=Post::find($id);
		if ($post != null) {
			Storage::delete(self::$disk.$post->image, $post->image);
			return true;
		}
		else{
			return false;
		}
	}

	public function getPostById($id){
		$post=Post::find($id);
		if ($post != null) {
			return $post;
		}
		else{
			return null;
		}
	}

	public function getPost()
	{
		return Post::get();
	}

	public function savePost($req, $id)
	{
		$data = array();
		$data['title'] = $req->input('title');
		$data['short_desc'] = $req->input('short_desc');
		$data['long_desc'] = $req->input('long_desc');
		$post = Post::find($id);
		if ($post != null) {
			if ($post->title != $data['title']) {
				$post->title = $data['title'];
			}
			if ($post->short_desc != $data['short_desc']) {
				$post->short_desc = $data['short_desc'];
			}
			if ($post->long_desc != $data['long_desc']) {
				$post->long_desc = $data['long_desc'];
			}
			$post->save();
			return true;
		}
		else{
			return false;
		}
	}

	public function checkExistPost($id)
	{
		if (Post::find($id) != null) {
			return true;
		}
		else{
			return false;
		}
	}

	public function getThreePost(){ 
		$maybePost = Post::paginate(self::$three);
		$data = array();
		foreach ($maybePost as $key => $value) {
			$data[$key]['id'] = $value->id;
			$data[$key]['title'] = $value->title;
			$data[$key]['short_desc'] = $value->short_desc;
			$data[$key]['long_desc'] = $value->long_desc;
			$data[$key]['image'] = $value->image;
		}

		return $data;
	}

	public function changeImage($req, $id)
	{
		$imageFile = $req->image;
		if ($imageFile != null) {
			try{
				$post=Post::find($id);
				Storage::delete(self::$disk.$post->image, $post->image);
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
		$post = Post::find($id);
		if ($post != null) {
			$post->image = $path;
			$post->save();
		}
	}
}