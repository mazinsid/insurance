<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Http\Requests\CreateStoreRequest;
use App\Http\Requests\UpdateStoreRequest;

class StoreController extends Controller
{ 
    public function index()
    {
        return view('store.index')->with('stores' , Store::all());
    }
    
    public function store(CreateStoreRequest $request)
    {
        $data = $request->validated();
        Store::create($data);
        return redirect(route('store.index'));
    }

    public function update(UpdateStoreRequest $request , Store $store)
    {
        $data = $request->validated();
        $store->update($data);
        return redirect(route('store.index'));
    }

    public function delete(Store $store)
    {
        $store->delete();
        return redirect(route('store.index'));
    } 
}
