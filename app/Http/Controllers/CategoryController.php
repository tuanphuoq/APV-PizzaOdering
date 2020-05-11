<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategoryService;
use Session;

class CategoryController extends Controller
{
    
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function viewAddCategory()
    {
        $data = $this->categoryService->getCategory();
        return view('categories.createCategory')->with(compact('data'));
    }

    public function editCategory(Request $req, $id)
    {
        if ($this->categoryService->checkExistCategory($id)) {
            $this->categoryService->changeImage($req, $id);
            $this->categoryService->saveCategory($req, $id);

            Session::flash('message', __('msg.updatesuccess'));

            return redirect()->route('category');
        }
    }

    public function viewEditCategory($id)
    {
        $category = $this->categoryService->getCategoryById($id);
        if ($category != null) {
            $data = $this->categoryService->getCategory();
            return view('categories.editCategory')->with(compact('data'))->with(compact('category'));
        }
        else{
            return view('store.404');
        }
    }

    public function addCategory(Request $req)
    {
        if ($this->categoryService->createCategory($req)) {
            Session::flash('message', __('msg.addsuccess'));

            return redirect()->route('category');
        }
        else{
            return view('store.404');
        }
    }

    public function deleteCategory($id)
    {
        if ($this->categoryService->checkExistCategory($id)) {
            $this->categoryService->deleteCategoryById($id);
            $this->categoryService->deleteImage($id);
        }
    }

    public function view()
    {
        $data = $this->categoryService->getCategory();
        return view('categories.myCategory')->with(compact('data'));
    }

    public function show($id){
        $data = $this->categoryService->getCategoryDetail($id);

        if($data==null){
            return view('store.404');
        } 
        else{
            $maybe = $this->categoryService->getThreeCategory();
            return view('categories.myCategory', compact('data'), compact('maybe'));
        }
    }

}
