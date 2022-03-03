<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Http\Requests\CreateBranchRequest;
use App\Http\Requests\UpdateBranchRequest;

class BranchController extends Controller
{
    public function index()
    {
        return view('branch.index')->with('branches' , Branch::all());
    }

    public function store(CreateBranchRequest $request)
    {
        $data = $request->validated();
        Branch::create($date);
        return redirect(route('branch.index'));
    }

    public function update(CreateBranchRequest $request , Branch $branch)
    {
        $data = $request->validated();
        $branch->update($data);
        return redirect(route('branch.index'));
    }

    public function delete(Branch $branch)
    {
        $branch->delete();
        return redirect(route('branch.index'));
    }
}
