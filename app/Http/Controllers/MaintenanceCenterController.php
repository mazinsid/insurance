<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaintenanceCenter;
use App\Http\Requests\CreateMaintenanceCenterRequest;
use App\Http\Requests\UpdateMaintenaceCenterRequest;
class MaintenanceCenterController extends Controller
{
    public function index()
    {
        return view('maintenanceCenters.index')->with('maintenanceCenters' , MaintenanceCenter::all());
    }
    
    public function store(CreateMaintenanceCenterRequest $request)
    {
        $data = $request->validated();
        MaintenanceCenter::create($data);
        return redirect(route('maintenanceCenters.index'));
    }

    public function update(UpdateMaintenaceCenterRequest $request , MaintenanceCenter $maintenanceCenters)
    {
        $data = $request->validated();
        $maintenanceCenters->update($data);
        return redirect(route('maintenanceCenters.index'));
    }

    public function delete(MaintenanceCenter $maintenanceCenters)
    {
        $maintenanceCenters->delete();
        return redirect(route('maintenanceCenters.index'));
    }
}
