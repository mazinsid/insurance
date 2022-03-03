<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoldProduct;
use App\Http\Requests\CreateSoldProductRequest;
use App\Http\Requests\UpdateSoldProductRequest;
class SoldProductController extends Controller
{
    public function index()
    {
        return view('soldProduct.index')->with('soldProducts' , SoldProduct::all());
    }
    
    public function store(CreateSoldProductRequest $request)
    {
        $data = $request->validated();
        SoldProduct::create($data);
        return redirect(route('soldProduct.index'));
    }

    public function update(UpdateSoldProductRequest $request , SoldProduct $soldProduct)
    {
        $data = $request->validated();
        $soldProduct->update($data);
        return redirect(route('soldProduct.index'));
    }

    public function delete(SoldProduct $product)
    {
        $soldProduct->delete();
        return redirect(route('soldProduct.index'));
    }
}
