<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        // $product = new Product();
        // $product->name = $request->get('name');
        // $product->image = $request->get('image');
        // $product->description = $request->get('description');
        // $product->save();

        // $product = new Product(
        //     [
        //         'name' => $request->get('name'),
        //         'image' => $request->get('image'),
        //         'description' => $request->get('description')
        //     ]
        // );
        // $product->save();

        Product::create([
            'name' => $request->get('name'),
            'image' => $request->get('image'),
            'description' => $request->get('description')
        ]);

        return redirect()->route('dashboard');
        // return redirect('/dashboard');
    }
}
