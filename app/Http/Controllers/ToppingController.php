<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ToppingService;
use Session;

class ToppingController extends Controller
{
    public function __construct(ToppingService $toppingService)
    {
        $this->toppingService = $toppingService;
    }

    public function create()
    {
        if ($this->toppingService->checkExistTopping($id)) {
        $data = $this->toppingService->getTopping();
        return view('toppings.createTopping')->with(compact('data'));
        }
    }

    public function edit(Request $req, $id)
    {
        if ($this->toppingService->checkExistTopping($id)) {
            $this->toppingService->changeImage($req, $id);
            $this->toppingService->saveTopping($req, $id);

            Session::flash('message', __('msg.addsuccess'));
            return redirect()->route('topping');
        }else{
            return view('store.404');
        }
    }

    public function viewEdit($id)
    {
        $topping = $this->toppingService->getToppingById($id);
        if ($topping != null) {
            $data = $this->toppingService->getTopping();
            return view('toppings.editTopping')->with(compact('data'))->with(compact('topping'));
        }
        else{
            return view('store.404');
        }
    }

    public function add(Request $req)
    {
        if ($this->toppingService->createTopping($req)) {
            Session::flash('message', __('msg.addsuccess'));

            return redirect()->route('topping');
        }
        else{
            return view('store.404');
        }
    }

    public function deleteTopping($id)
    {
        if ($this->toppingService->checkExistTopping($id)) {
            $this->toppingService->deleteToppingById($id);
            $this->toppingService->deleteImage($id);
        }
        else{
            return view('store.404');
        }
    }

    public function view()
    {
        $data = $this->toppingService->getTopping();
        return view('toppings.myTopping')->with(compact('data'));
    }

    public function show($id){
        $data = $this->toppingService->getToppingDetail($id);

        if($data==null){
            return view('store.404');
        } 
        else{
            $maybe = $this->toppingService->getThreeTopping();
            return view('toppings.myTopping', compact('data'), compact('maybe'));
        }
    }
}
