<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function home(){
        return view('create');
    }

    public function store(Request $request){
        // Product::create([
        //     'product_name' => $request->product_name,
        //     'price' => $request->price,
        //     'stock' => $request->stock
        // ]);
        Product::create($request->all());
        //return back();
        return redirect('/products');
    }

    public function viewProducts(){
        //return view('products');
        $products = Product::all();
        return view('product.index', compact('products'));
    }
    
    public function edit($id){
        //return view('edit');
        //$product = Product::where('id', $id)->first();
        $product = Product::findOrFail($id);
        //dd($product);
        return view ('edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Product::where('id',$id)->update([
        //     'product_name' => $request->product_name,
        //     'price' => $request->price,
        //     'stock' => $request->stock
        // ]);
        Product::findOrFail($id)->update($request->all());
        return redirect('/products');
    }

    public function delete($id){
        Product::destroy($id);
        return back();
    }

}
