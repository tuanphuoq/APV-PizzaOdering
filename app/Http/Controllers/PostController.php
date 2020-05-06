<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostService;
use Session;

class PostController extends Controller
{
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function create()
    {
        $data = $this->postService->getPost();
        return view('pages.addPost')->with(compact('data'));
    }

    public function edit(Request $req, $id)
    {
        if ($this->postService->checkExistPost($id)) {
            $this->postService->changeImage($req, $id);
            $this->postService->savePost($req, $id);

            Session::flash('message', __('msg.updatesuccess'));

            return redirect()->route('post');
        }
        else{
            return view('store.404');
        }
    }

    public function viewEdit($id)
    {
        $post = $this->postService->getPostById($id);
        if ($post != null) {
            $data = $this->postService->getPost();
            return view('pages.editPost')->with(compact('data'))->with(compact('post'));
        }
        else{
            return view('store.404');
        }
    }

    public function add(Request $req)
    {
        if ($this->postService->createPost($req)) {
            Session::flash('message', __('msg.addsuccess'));

            return redirect()->route('post');
        }
        else{
            return view('store.404');
        }
    }

    public function deletePost($id)
    {
        if ($this->postService->checkExistPost($id)) {
            $this->postService->deletePostById($id);
            $this->postService->deleteImage($id);
        }
        else{
            return view('store.404');
        }
    }

    public function view()
    {
        $data = $this->postService->getPost();
        return view('pages.viewPost')->with(compact('data'));
    }

    public function show($id){
        $data = $this->postService->getPostDetail($id);

        if($data==null){
            return view('store.404');
        } 
        else{
            $maybe = $this->postService->getThreePost();
            return view('pages.viewPost', compact('data'), compact('maybe'));
        }
    }
}
