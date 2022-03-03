<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Requests\CreateCustomerRequest;
use App\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.index')->with('customers' , Customer::all());
    }

    public function store(CreateCustomerRequest $request)
    {
        $data = $request->validated();
        Customer::create($data);
        return redirect(route('customer.index'));
    }

    public function update(UpdateCustomerRequest $request , Customer $customer)
    {
        $data = $request->validated();
        $customer->update($data);
        return redirect(route('customer.index'));
    }

    public function delete(Customer $customer)
    {
        $customer->delete();
        return redirect(route('customer.index'));
    }
}
