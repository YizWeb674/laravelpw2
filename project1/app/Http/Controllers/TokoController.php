<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class TokoController extends Controller
{
    public function index(){
        return view('toko/index');
    }

    public function detail(){
        return view('toko/detail');
    }

    public function about(){
        return view('toko/about');
    }

    public function admin(){
        $products = Product::all();
        return view('toko/admin', compact('products'));
    }

    public function create(){
        $products = Product::all();
        return view('toko/create', compact('products'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        Product::create($request->all());
        return redirect()->route('produk.admin')->with('succes', 'Product Create Successfully');
    }
}
