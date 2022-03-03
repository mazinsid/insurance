<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index')->with('products' , Product::all());
    }
    
    public function store(CreateProductRequest $request)
    {
        $data = $request->validated();
        Product::create($data);
        return redirect(route('product.index'));
    }

    public function update(UpdateProductRequest $request , Product $product)
    {
        $data = $request->validated();
        $product->update($data);
        return redirect(route('product.index'));
    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect(route('product.index'));
    }
}
