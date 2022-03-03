<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;
use App\Http\Requests\CreateMaintenanceRequest;
use App\Http\Requests\UpdateMaintenanceRequest;

class MaintenanceController extends Controller
{
    public function index()
    {
        return view('maintenance.index')->with('maintenances' , Maintenance::all());
    }
    
    public function store(CreateMaintenanceRequest $request)
    {
        $data = $request->validated();
        Maintenance::create($data);
        return redirect(route('maintenance.index'));
    }

    public function update(UpdateMaintenaceCenterRequest $request , Maintenance $maintenance)
    {
        $data = $request->validated();
        $maintenance->update($data);
        return redirect(route('maintenance.index'));
    }

    public function delete(Maintenance $maintenance)
    {
        $maintenance->delete();
        return redirect(route('maintenance.index'));
    }
}
