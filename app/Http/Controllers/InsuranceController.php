<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insurance;
use App\Http\Requests\CreateInsuranceRequest;
use App\Http\Requests\UpdateInsuranceRequest;

class InsuranceController extends Controller
{
    public function index()
    {
        return view('insurance.index')->with('insurances' , Insurance::all());
    }
    
    public function store(CreateInsuranceRequest $request)
    {
        $data = $request->validated();
        Insurance::create($data);
        return redirect(route('insurance.index'));
    }

    public function update(UpdateInsuranceRequest $request , Insurance $insurance)
    {
        $data = $request->validated();
        $insurance->update($data);
        return redirect(route('insurance.index'));
    }

    public function delete(Insurance $insurance)
    {
        $insurance->delete();
        return redirect(route('insurance.index'));
    }
}
