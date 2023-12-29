<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Mockery\Exception;

class ShopController extends  Controller
{

    public function index()
    {
        $products=Product::all();
        return view('shopView',compact('products'));
    }
    private function productNotExists($product): bool
    {
        return $product==null;

    }


    public  function  editItemRefresh(Request $request): \Illuminate\Http\RedirectResponse
    {
        try {
            //dd($request->all());

            $id=$request->input('id');
            $editName=$request->input('ItemName');
            $editURL=$request->input('ImageUrl');
            $editPrice=$request->input('ItemPrice');
            $editDesc=$request->input('ItemDescription');

            $product=Product::find($id);

            if ($this->productNotExists($product))
            {
                return redirect()->back()->with('error','ID does not exist');
            }
            $product->ItemName = $editName;
            $product->ImageURL = $editURL;
            $product->ItemPrice = $editPrice;
            $product->ItemDescription = $editDesc;

            $product->save();



            return redirect()->action([ShopController::class,'index']);
        }catch (\Exception $exception)
        {
//            dd($exception);
            return  redirect()->action('shop')->with('error','Error in changing');
        }
    }
    public  function  deleteItemRefresh(Request $request): \Illuminate\Http\RedirectResponse
    {
        try {

            $product =Product::find($request->input('id'));
            if ($this->productNotExists($product))
            {
                return redirect()->back()->with('error','item does not exist');
            }
//            dd($product);
            $product->delete();
            return redirect()->action([ShopController::class,'index']);

        }catch (Exception $exception)
        {
//            dd($exception);
            return redirect()->back()->with('error','Error in action: "delete item"');
        }
    }
    public  function  addItemRefresh(Request $request):\Illuminate\Http\RedirectResponse
    {
        try {
            $product= new Product();
            $product->ItemName=$request->input('ItemName');
            $product->ImageUrl=$request->input('ImageUrl');
            $product->ItemPrice=$request->input('ItemPrice');
            $product->ItemDescription=$request->input('ItemDescription');
            $product->save();

            return  redirect()->action([ShopController::class,'index']);
        }catch (Exception $exception)
        {
//            dd($exception);
            return  redirect()->back()->with('error','Error in "Add action"');
        }

    }

    public function  toJson(): string
    {
        $products=Product::all();
        $jsonData=$products->toJson();
        file_put_contents(storage_path('data/products.json'),$jsonData);
        return redirect()->action([ShopController::class,'index'])->with('Success','Json was created');
    }

}
